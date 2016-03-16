	</div>

	<div id="navigation">
		<ul class="sections">
			<li class="content">
				<h3>Content</h3>
				<ul>
					<?= $HTML->link("Pages", "/janitor/admin/page/list", array("wrapper" => "li.page")) ?>
					<?= $HTML->link("Todos", "/janitor/admin/todo/list/state/30", array("wrapper" => "li.todo")) ?>
				</ul>
			</li>
			<li class="site">
				<h3>Site</h3>
				<ul>
					<?= $HTML->link("Navigations", "/janitor/admin/navigation/list", array("wrapper" => "li.navigation")) ?>
					<?= $HTML->link("Tags", "/janitor/admin/tag/list", array("wrapper" => "li.tags")) ?>
					<?= $HTML->link("Log", "/janitor/admin/log/list", array("wrapper" => "li.logs")) ?>
				</ul>
			</li>
			<li class="users">
				<h3>Users</h3>
				<ul>
					<?= $HTML->link("Users", "/janitor/admin/user/list", array("wrapper" => "li.user")) ?>
					<?= $HTML->link("Profile", "/janitor/admin/profile", array("wrapper" => "li.profile")) ?>
				</ul>
			</li>
		</ul>
	</div>

	<div id="footer">
		<ul class="servicenavigation">
			<li class="copyright">Copyright 2016, parentNode.dk</li>
		</ul>
	</div>
</div>

</body>
</html>