<?
require_once "connect.php";

$_DEBUG = true;

$matches = array();
$url = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['REQUEST_URI'];
$url = preg_replace('#http(s)?://#', '', $url);

$slashes = preg_match_all('/\//', $url, $matches);

if ($_DEBUG) $slashes -= 1;

$x_link_prefix = $link_prefix = ''; #x_link_prefix: external link prefix
for ($i = 0; $i < $slashes; $i++) {
    $x_link_prefix .= '../';
    if ($i > 0) $link_prefix .= '../';
}

/*
 *
 * Function to convert word to slug
 */
function formatHtml($string)
{
    $string = str_replace("\n", "<br />", $string);
    $string = str_replace('\n', "<br />", $string);
    $string = stripslashes($string);
    $string = preg_replace('/[^a-z0-9]+/i', '-', iconv('UTF-8', 'ASCII//TRANSLIT', $string));
    $string = trim($string, '-');
    $string = strtolower($string);
    return $string;
}

/*
 * This function get the few details of all unapproved applicants and displayed them for
 * the admin to either approve or delete the application
 */
function applicants()
{
    global $conn;
    $id_c = 1;
    if ($result = $conn->query("SELECT a.*,s.name FROM applicants `a` INNER JOIN c_states `s` ON `s`.`id` = `a`.`state` ORDER BY `a`.`id` DESC")) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                echo "<tr>";
                echo "<td><input class = 'checkbox1' type='checkbox' value = '" . $row->id . "' name='selector[]'></td>";
                echo "<td>" . $id_c++ . "</td>";
                echo "<td>" . $row->fullname . "</td>";
                echo "<td>" . $row->useremail . "</td>";
                echo "<td>" . $row->phone_no . "</td>";
                echo "<td>" . $row->name . "</td>";
                echo "<td><a title = 'View Application'  style = 'color: green;' href = 'view_application?id=". $row->id ."'><i class = 'fa fa-eye'></i></a> </td>";
                echo "</tr>";
            }
        } else {
            echo "<div class = 'alert alert-warning' style='padding-left:100px;'>No results to display</div>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}

/*
 * This function displays the full details of an applicants to
 * either be approved or decline
 * $return @conn
*/

function approveApplicant($id) {
    global $conn;
    $query = $conn->query("SELECT `a`.*, `c`.`name`, `t`.`name` AS `state_name`
            FROM
              `applicants` `a`, `cohorts` `c`, `c_states` `t`
            WHERE
              `a`.`id` = '$id' AND `a`.`cohorts_id` = `c`.`id` AND `a`.`state` = `t`.`id`
            ORDER BY
              `a`.`id` LIMIT 1");
//      $query->execute();
    return $query->fetch_assoc();
}
/*
 * This function get the  details of all registered administrators from
 * the database
 */
function manage_admins()
{
    global $conn;
    if ($result = $conn->query("SELECT * FROM admin ORDER BY userID")) {
        if ($result->num_rows > 0) {
            echo "<table class=\"table table-striped table-bordered\" cellpadding=\"2\" cellspacing=\"2\">";
            echo "<tr>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Status</th>
                      <th>Action</th>
                      </tr>";
            while ($row = $result->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $row->fullName . "</td>";
                echo "<td>" . $row->userEmail . "</td>";
                echo "<td>" . $row->userStatus . "</td>";
                echo "<td><button class = 'btn btn-small btn-danger'><a style = 'color:#fff;' href = 'model/a_action?userID=" . $row->userID . "'><i class = \"fa fa-trash\"> Delete</i></a></button></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<div class = 'alert alert-warning' style='padding-left:100px;'>No results to display</div>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}

/** Retrieve uploaded File to the Administer for action**/
function admin_manage_file()
{
    $num = 1;
    global $conn;
    if ($result = $conn->query("SELECT * FROM media `m` LEFT JOIN admin `a` ON `a` . `userID` = `m`.uploader_id ORDER BY `m` .`id`")) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $num++ . "</td>";
                echo "<td>" . $row->title . "</td>";
                echo "<td>" . $row->type . "</td>";
                echo "<td>" . $row->size . "</td>";
                echo "<td>" . $row->file_desc . "</td>";
                echo "<td>" . $row->week . "</td>";
                echo "<td>" . $row->fullName . "</td>";
                echo "<td>" . $row->created_at . "</td>";
                echo "<td>" . $row->downloads . "</td>";
                echo "<td><a title = 'Publish' style = 'color: green;' href='model/m_depatch?id=$row->id'><span class = 'fa fa-check'></span></a> &nbsp;
                    <a title = 'Delete' style = 'color: red' href='model/f_action?id=" . $row->id . "'><span class = 'fa fa-trash'> </span></a>  </td>                                    </td>";
                echo "</tr>";
            }
        } else {
            echo "<div class = 'alert alert-warning' style='padding-left:100px;'>No results to display</div>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}

/*
 * This function get the details of all approved applicants and displayed them for
 * the admin and to also view each student's progress
 */
function studentData()
{
    $id_c = 1;
    global $conn;
    $sql = "SELECT `s`.*, `c`.`name`, `t`.`name` AS `state_name`
            FROM
            `studentdata` `s`, `cohorts` `c`, `c_states` `t`
            WHERE
            `s`.`cohorts_id` = `c`.`id` AND `s`.`state` = `t`.`id`
            ORDER BY
            `s`.`id`
            ";
    /*"SELECT s.*,c.id AS cid,c.name FROM studentdata `s`, `c_states` `t` INNER JOIN cohorts `c` ON `c`.`id` = `s`.`cohorts_id` ORDER BY `s`.`id`"*/
    if ($result = $conn->query($sql)) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $id_c++ . "</td>";
                echo "<td>" . $row->fullname . "</td>";
                echo "<td>" . $row->useremail . "</td>";
                echo "<td>" . $row->phone_no . "</td>";
                echo "<td>" . $row->state_name . "</td>";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->created_at . "</td>";
                echo "<td> <a title='Delete' style = 'color: red;' href='model/s_action?id=" . $row->id . "'><i class ='fa fa-trash'></i></a> &nbsp;
        <a style='color: blue;' title='View Progress' href='student_progress?id=" . $row->id . "'><i class ='fa fa-eye'></i></a> </td>";
                echo "</tr>";
            }
        } else {
            echo "<div class = 'alert alert-warning' style='padding-left:100px;'>No results to display</div>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}

#! Get an approved Student From the students data Table by id
function getAStudent($id)
{
    global $conn;
    $query = $conn->query("SELECT `s`.*, `c`.`name`, `t`.`name` AS `state_name`
            FROM
              `studentdata` `s`, `cohorts` `c`, `c_states` `t`
            WHERE
              `s`.`id` = '$id' AND `s`.`cohorts_id` = `c`.`id` AND `s`.`state` = `t`.`id`
            ORDER BY
              `s`.`id` LIMIT 1");
//      $query->execute();
    return $query->fetch_assoc();
}

#!- function to fetch all the media downloaded by a particular student
function getEachMediaByStudent($id)
{
    global $conn;
    $query = $conn->query("SELECT `m`.*, `p`.*
                                          FROM `media` `m`, `student_progress` `p`
                                          WHERE `p`.`studentdata_id` = '$id' AND `p`.`media_id` = `m`.`id`");
    echo $conn->error;
    return $query->fetch_all(MYSQLI_ASSOC);
}

/*
 * This function displays all dispatched Media to the active Cohorts
 */
function adminDispatchMedia()
{
    $num = 1;
    global $conn;
    $sql = "SELECT `m`.*, `c`.`name`, `mc`.*
            FROM
            `media_cohorts` `mc`, `cohorts` `c`, `media` `m`
            WHERE
            `m`.`id` = `mc`.`media_id` AND `mc`.`cohort_id` = `c`.`id`
            ORDER BY
            `mc`.`id`
            ";
    if ($result = $conn->query($sql)) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $num++ . "</td>";
                echo "<td>" . $row->title . "</td>";
                echo "<td>" . $row->type . "</td>";
                echo "<td>" . $row->size . "</td>";
                echo "<td>" . $row->file_desc . "</td>";
                echo "<td>" . $row->week . "</td>";
                echo "<td>" . $row->name . "</td>";
                echo "<td>" . $row->created_at . "</td>";
                echo "<td>" . $row->downloads . "</td>";
                echo "<td><a title = 'Delete' style = 'color: red' href='model/dis_action?id=" . $row->id . "'><span class = 'fa fa-trash'> </span></a></td>";
                echo "</tr>";
            }
        } else {
            echo "<div class = 'alert alert-warning' style='padding-left:100px;'>No results to display</div>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}

/*
 * This function get the total number of administrators registered
 * in the database, admin can be deleted
 */
function admin_counts()
{
    global $conn;
//    $conn = mysqli_connect("localhost", "root", "engineer", "nwt-portal");
    if ($result = $conn->query("SELECT * FROM admin ORDER BY userID")) {
        if ($result->num_rows > 0) {
            echo mysqli_num_rows($result);
        } else {
            echo "0";
        }
    }
}

/*
 * This function get the total number of students approved
 * in the database, student can be deleted
 */
function student_counts()
{
    global $conn;
//    $conn = mysqli_connect("localhost", "root", "engineer", "nwt-portal");
    if ($result = $conn->query("SELECT * FROM studentdata ORDER BY id")) {
        if ($result->num_rows > 0) {
            echo mysqli_num_rows($result);
        } else {
            echo "0";
        }
    }
}

/*
 * This function get the total number of unapproved applicants
 * in the database, applicants can be deleted
 */
function unapproved_applicants_counts()
{
    global $conn;
//    $conn = mysqli_connect("localhost", "root", "engineer", "nwt-portal");
    if ($result = $conn->query("SELECT * FROM applicants ORDER BY id")) {
        if ($result->num_rows > 0) {
            echo mysqli_num_rows($result);
        } else {
            echo "0";
        }
    }
}

/*
 * This function get the total number of uploaded Files
 */
function media_counts()
{
    global $conn;
//    $conn = mysqli_connect("localhost", "root", "engineer", "nwt-portal");
    if ($result = $conn->query("SELECT * FROM media ORDER BY id")) {
        if ($result->num_rows > 0) {
            echo mysqli_num_rows($result);
        } else {
            echo "0";
        }
    }
}

/*
 * This function get the total number of Dispatched Media
 */
function media_dispatch_counts()
{
    global $conn;
//    $conn = mysqli_connect("localhost", "root", "engineer", "nwt-portal");
    if ($result = $conn->query("SELECT * FROM media_cohorts ORDER BY id")) {
        if ($result->num_rows > 0) {
            echo mysqli_num_rows($result);
        } else {
            echo "0";
        }
    }
}
?>
