<ul class="nav menu dash_pad" style="margin-top: 10px;">
	<li class="<?= $active_page == 'dashboard' ? 'active':''; ?>"><a href="../dashboard"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
    <li class="<?= $active_page == 'manage_files' ? 'active':''; ?>"><a href="../pages/manage_files"><svg class="glyph stroked upload"><use xlink:href="#stroked-upload"/></svg>Media</a></li>
	<li class="<?= $active_page == 'admin_settings' ? 'active':''; ?>"><a href="../pages/admin_settings"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Manage Admin(s)</a></li>
	<li class="<?= $active_page == 'applications' ? 'active':''; ?>"><a href="../pages/applications"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  Applicants</a></li>
	<li class="<?= $active_page == 'students' ? 'active':''; ?>"><a href="../pages/students"><svg class="glyph stroked user"><use xlink:href="#stroked-table"></use></svg> Students</a></li>
    <li class="<?= $active_page == 'dispatch-media' ? 'active':''; ?>"><a href = "../pages/dispatch-media"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg>Dispatched Media</a></li>
</ul>
