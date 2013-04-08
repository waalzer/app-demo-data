
<?php

/**
 * Created with https://github.com/schmunk42/database-command
 */

class m130408_125548_demo_data extends CDbMigration {

	public function safeUp() {
        if (Yii::app()->db->schema instanceof CMysqlSchema) {
           $this->execute('SET FOREIGN_KEY_CHECKS = 0;');
           $options = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        } else {
           $options = '';
        }
        $this->truncateTable("AuthAssignment");
        $this->truncateTable("AuthItem");
        $this->truncateTable("AuthItemChild");
        $this->truncateTable("Rights");
        $this->truncateTable("p3_widget");
        $this->truncateTable("p3_media");
        $this->truncateTable("p3_media_meta");
        $this->truncateTable("usr_profiles");
        $this->truncateTable("usr_profiles_fields");
        $this->truncateTable("usr_users");
        $this->truncateTable("p3_widget_meta");
        $this->truncateTable("p3_widget_translation");
        $this->truncateTable("p3_page");
        $this->truncateTable("p3_page_meta");
        $this->truncateTable("p3_page_translation");







        // Data for table 'AuthAssignment'
        $this->insert("AuthAssignment", array(
            "itemname"=>"Editor",
            "userid"=>"3",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthAssignment", array(
            "itemname"=>"Editor",
            "userid"=>"1",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthAssignment", array(
            "itemname"=>"Admin",
            "userid"=>"1",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthAssignment", array(
            "itemname"=>"Editor",
            "userid"=>"2",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthAssignment", array(
            "itemname"=>"Editor",
            "userid"=>"4",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthAssignment", array(
            "itemname"=>"Editor",
            "userid"=>"6",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthAssignment", array(
            "itemname"=>"Editor",
            "userid"=>"11",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthAssignment", array(
            "itemname"=>"Editor",
            "userid"=>"13",
            "bizrule"=>null,
            "data"=>"N;",
        ) );




        // Data for table 'AuthItem'
        $this->insert("AuthItem", array(
            "name"=>"Admin",
            "type"=>"2",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"Authenticated",
            "type"=>"2",
            "description"=>"All user accounts",
            "bizrule"=>"return !Yii::app()->user->isGuest;",
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"Guest",
            "type"=>"2",
            "description"=>null,
            "bizrule"=>"return Yii::app()->user->isGuest;",
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"Editor",
            "type"=>"2",
            "description"=>"Content Editor (Widgets, Media Files)",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3admin.Default.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3admin.Module.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.Ckeditor.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.Default.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.File.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.Import.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.P3Media.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.P3MediaMeta.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.Default.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.Widget.*",
            "type"=>"1",
            "description"=>"Frontend Editor",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.P3Widget.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.P3WidgetMeta.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.P3WidgetTranslation.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3pages.P3Page.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3pages.Default.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3pages.P3PageMeta.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3pages.P3PageTranslation.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3admin.Default.Index",
            "type"=>"0",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3admin.Default.Settings",
            "type"=>"0",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );




        // Data for table 'AuthItemChild'
        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.Ckeditor.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.Default.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.Import.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.P3Media.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.P3MediaMeta.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.Default.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.Widget.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.P3Widget.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.P3WidgetMeta.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.P3WidgetTranslation.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3pages.Default.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3pages.P3Page.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3pages.P3PageMeta.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3pages.P3PageTranslation.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3admin.Default.Index",
        ) );




        // Data for table 'Rights'



        // Data for table 'p3_widget'
        $this->insert("p3_widget", array(
            "id"=>"7",
            "alias"=>"CWidget",
            "rank"=>"0",
            "containerId"=>"top",
            "moduleId"=>"p3pages",
            "controllerId"=>"default",
            "actionName"=>"page",
            "requestParam"=>"7",
            "sessionParam"=>"",
        ) );

        $this->insert("p3_widget", array(
            "id"=>"9",
            "alias"=>"CWidget",
            "rank"=>"10",
            "containerId"=>"top",
            "moduleId"=>"",
            "controllerId"=>"site",
            "actionName"=>"index",
            "requestParam"=>"",
            "sessionParam"=>"",
        ) );

        $this->insert("p3_widget", array(
            "id"=>"13",
            "alias"=>"IntroJs",
            "rank"=>"0",
            "containerId"=>"main",
            "moduleId"=>"",
            "controllerId"=>"site",
            "actionName"=>"index",
            "requestParam"=>"",
            "sessionParam"=>"",
        ) );

        $this->insert("p3_widget", array(
            "id"=>"104",
            "alias"=>"CWidget",
            "rank"=>"0",
            "containerId"=>"top",
            "moduleId"=>"",
            "controllerId"=>"site",
            "actionName"=>"index",
            "requestParam"=>"",
            "sessionParam"=>"",
        ) );




        // Data for table 'p3_media'
        $this->insert("p3_media", array(
            "id"=>"1",
            "title"=>"Test",
            "description"=>null,
            "type"=>"1",
            "path"=>"4/17-515ee8ab17f8d.jpg",
            "md5"=>"5b3518826f8b0c4b6aa9d652a122fcd6",
            "originalName"=>"17.jpg",
            "mimeType"=>"image/jpeg",
            "size"=>"311767",
            "info"=>"{\"0\":640,\"1\":480,\"2\":2,\"3\":\"width=\\\"640\\\" height=\\\"480\\\"\",\"bits\":8,\"channels\":3,\"mime\":\"image\\/jpeg\"}",
        ) );

        $this->insert("p3_media", array(
            "id"=>"2",
            "title"=>"test",
            "description"=>null,
            "type"=>"2",
            "path"=>null,
            "md5"=>null,
            "originalName"=>null,
            "mimeType"=>null,
            "size"=>null,
            "info"=>null,
        ) );




        // Data for table 'p3_media_meta'
        $this->insert("p3_media_meta", array(
            "id"=>"1",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"2",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 15:27:05",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-04-05 17:07:23",
            "modifiedBy"=>"4",
            "guid"=>"DD33DFD7-1295-4DFA-AB38-C9BBCB475ED0",
            "ancestor_guid"=>null,
            "model"=>"P3Media",
        ) );

        $this->insert("p3_media_meta", array(
            "id"=>"2",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 15:27:40",
            "createdBy"=>"1",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"17B60803-11B3-4EA9-AF14-7BE4855D7121",
            "ancestor_guid"=>null,
            "model"=>"P3Media",
        ) );




        // Data for table 'usr_profiles'
        $this->insert("usr_profiles", array(
            "user_id"=>"1",
            "first_name"=>"Administrator",
            "last_name"=>"Admin",
        ) );

        $this->insert("usr_profiles", array(
            "user_id"=>"13",
            "first_name"=>"editor",
            "last_name"=>"editor",
        ) );




        // Data for table 'usr_profiles_fields'
        $this->insert("usr_profiles_fields", array(
            "id"=>"1",
            "varname"=>"first_name",
            "title"=>"First Name",
            "field_type"=>"VARCHAR",
            "field_size"=>"255",
            "field_size_min"=>"3",
            "required"=>"2",
            "match"=>"",
            "range"=>"",
            "error_message"=>"Incorrect First Name (length between 3 and 50 characters).",
            "other_validator"=>"",
            "default"=>"",
            "widget"=>"",
            "widgetparams"=>"",
            "position"=>"1",
            "visible"=>"3",
        ) );

        $this->insert("usr_profiles_fields", array(
            "id"=>"2",
            "varname"=>"last_name",
            "title"=>"Last Name",
            "field_type"=>"VARCHAR",
            "field_size"=>"255",
            "field_size_min"=>"3",
            "required"=>"2",
            "match"=>"",
            "range"=>"",
            "error_message"=>"Incorrect Last Name (length between 3 and 50 characters).",
            "other_validator"=>"",
            "default"=>"",
            "widget"=>"",
            "widgetparams"=>"",
            "position"=>"2",
            "visible"=>"3",
        ) );




        // Data for table 'usr_users'
        $this->insert("usr_users", array(
            "id"=>"1",
            "username"=>"admin",
            "password"=>"21232f297a57a5a743894a0e4a801fc3",
            "email"=>"sdjnsakdsa@web.de",
            "activkey"=>"b90a7448857c7e5af917e095365a3465",
            "superuser"=>"1",
            "status"=>"1",
            "create_at"=>"2013-03-26 08:54:53",
            "lastvisit_at"=>"2013-04-08 12:22:18",
        ) );

        $this->insert("usr_users", array(
            "id"=>"13",
            "username"=>"editor",
            "password"=>"5aee9dbd2a188839105073571bee1b1f",
            "email"=>"editor@testtesttest.de",
            "activkey"=>"d7d41784deeeadb8ed7109958f215964",
            "superuser"=>"0",
            "status"=>"1",
            "create_at"=>"CURRENT_TIMESTAMP",
            "lastvisit_at"=>"2013-04-08 12:22:22",
        ) );




        // Data for table 'p3_widget_meta'
        $this->insert("p3_widget_meta", array(
            "id"=>"7",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 16:17:00",
            "createdBy"=>"1",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"092E274C-AA8E-4495-98C3-190569923763",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );

        $this->insert("p3_widget_meta", array(
            "id"=>"9",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 17:11:07",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-04-03 14:26:11",
            "modifiedBy"=>"1",
            "guid"=>"610BD9EA-80D9-4E60-99D8-73A75CF54733",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );

        $this->insert("p3_widget_meta", array(
            "id"=>"13",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-04-02 15:09:14",
            "createdBy"=>"1",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"BF42D0E4-1F13-42AC-AEFA-E178B9C7602B",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );

        $this->insert("p3_widget_meta", array(
            "id"=>"104",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"13",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-04-08 12:22:17",
            "createdBy"=>"13",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"FB0A39EF-A7B7-42FD-8F8F-0CA98BC0BB67",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );




        // Data for table 'p3_widget_translation'
        $this->insert("p3_widget_translation", array(
            "id"=>"1",
            "p3_widget_id"=>"1",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"grgrgrg",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"2",
            "p3_widget_id"=>"2",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"<p>
	fefefef febfew f</p>
<p>
	&nbsp;</p>
<p>
	&nbsp;</p>
<p>
	gfd</p>
<p>
	g</p>
<p>
	df</p>
<p>
	g</p>
",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"3",
            "p3_widget_id"=>"3",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"test",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"4",
            "p3_widget_id"=>"7",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"fghfh",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"5",
            "p3_widget_id"=>"8",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"test",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"6",
            "p3_widget_id"=>"9",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"<div data-intro=\"Hello step one!\" data-step=\"1\" id=\"login\" style=\"background:#f3f3f3;border-radius:5px;padding:20px;margin-bottom:20px;\">
	<img src=\"demo/phundament.png\" style=\"float:left;margin-right:20px;margin-bottom:10px;\" />
	<h1>
		Welcome to Phundament 3!</h1>
	<h3>
		You will like it.</h3>
	<p>
		<a href=\"https://github.com/phundament/\" target=\"_blank\">View on GitHub</a> | <a href=\"https://github.com/phundament/app/wiki\" target=\"_blank\">The Definitive Guide</a> |&nbsp;<a href=\"http://phundament.com/\" target=\"_blank\">Phundament Homepage</a></p>
</div>
<div class=\"row\">
	<div class=\"span4\" data-intro=\"Hello step one!\" data-step=\"2\" id=\"login\" style=\"background:#f3f3f3;border-radius:5px;margin-bottom:20px;\">
		<div style=\"padding:10px;\">
			<h1>
				Login</h1>
			<p>
				Login with&nbsp;<code>admin/admin</code></p>
			<p>
				<img alt=\"\" src=\"/demo/login.png\" /></p>
		</div>
	</div>
	<div class=\"span4\" data-intro=\"Hello step one!\" data-step=\"3\" id=\"login\" style=\"background:#f3f3f3;border-radius:5px;margin-bottom:20px;\">
		<div style=\"padding:10px;\">
			<h1>
				Create Pages</h1>
			<p>
				<strong>Create index</strong></p>
			<p>
				Log in and go to Sitemap in the top menu. Click <span class=\"label label-error\">Create</span>&nbsp;then&nbsp;<span class=\"label label-error\">Text input</span> and paste <code>{&quot;route&quot;:&quot;/site/index&quot;}</code>&nbsp;in the text box to add this page as index.</p>
			<p>
				Select Layout <span class=\"label label-error\">_TbNavbar</span> and save the page.</p>
			<p>
				<strong>Create Child Page</strong></p>
			<p>
				Go to your index page. Click <span class=\"label label-error\">Append Child Page</span> in the top menu. Select&nbsp;<span class=\"label label-error\">Main Layout</span> and save.</p>
			<p>
				<strong>Add translation</strong></p>
			<p>
				You will see * after the pages name in the top menu because there isn&#39;t any translation for it. Add one by clicking <span class=\"label label-error\">+ Add Translation</span>. Choose language, menu name and page title.</p>
			<p>
				<strong>Create Sibling Pages</strong></p>
			<p>
				To add more pages at same level in the top menu click <span class=\"label label-error\">Append Sibling Page</span>.</p>
		</div>
	</div>
	<div class=\"span4\" data-intro=\"Hello step one!\" data-step=\"4\" id=\"login\" style=\"background:#f3f3f3;border-radius:5px;margin-bottom:20px;\">
		<div style=\"padding:10px;\">
			<h1>
				Create Widgets</h1>
			<p>
				<strong>Switch to edit mode</strong></p>
			<p>
				Go to a page and switch to the edit mode by clicking the edit icon at the top.</p>
			<p>
				<img alt=\"\" src=\"/demo/topmenubar.png\" style=\"width: 299px; height: 35px;\" /></p>
			<p>
				<strong>Create a widget</strong></p>
			<p>
				Hover over container top or main and add <span class=\"label label-error\">Basic HTML Widget</span>.</p>
			<p>
				<strong>Add translation and content</strong></p>
			<p>
				Then add a translation, type some text in the editor, try to style it and add some media.</p>
			<p>
				<strong>See the guide</strong></p>
			<p>
				<a href=\"https://github.com/phundament/app/wiki/Pages\" target=\"_blank\">Pages</a>,&nbsp;<a href=\"https://github.com/phundament/app/wiki/Widgets\" target=\"_blank\">Widgets</a>, <a href=\"https://github.com/phundament/app/wiki/Ckeditor\" target=\"_blank\">CKEditor</a> and <a href=\"https://github.com/phundament/app/wiki/Media\" target=\"_blank\">Media</a>.</p>
		</div>
	</div>
</div>
<div style=\"background:#f3f3f3;border-radius:5px;padding:20px;margin-bottom:20px;\">
	<h1>
		Give us some Feedback</h1>
	<p>
		<a href=\"https://groups.google.com/forum/?fromgroups#!forum/phundament-dev\" target=\"_blank\">Google Groups</a>&nbsp;| <a href=\"https://plus.google.com/u/0/114873431066202526630/posts\" target=\"_blank\">Google+</a> | <a href=\"https://www.facebook.com/phundament\" target=\"_blank\">Facebook</a>&nbsp;| <a href=\"https://twitter.com/phundament\" target=\"_blank\">Twitter</a>&nbsp;| <a href=\"http://www.yiiframework.com/forum/index.php/topic/24696-extension-phundament\" target=\"_blank\">Yii Forum</a></p>
</div>
<p>
	&nbsp;</p>
",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"7",
            "p3_widget_id"=>"13",
            "language"=>"en",
            "properties"=>"{\"data\":{\"0\":{\"id\":\"login\",\"step\":\"1\",\"intro\":\"Hello World!\"}},\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"<a onclick=\"YiiIntroJS.start('login');\">Start</a>",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"8",
            "p3_widget_id"=>"14",
            "language"=>"en",
            "properties"=>"{\"data\":{\"0\":{\"id\":\"login\",\"step\":\"2\",\"intro\":\"Hello World 2!\"}},\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>null,
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"9",
            "p3_widget_id"=>"19",
            "language"=>"en",
            "properties"=>"{\"data\":{},\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"TEST TEST TEST",
        ) );




        // Data for table 'p3_page'
        $this->insert("p3_page", array(
            "id"=>"5",
            "layout"=>"//layouts/main",
            "view"=>"//p3pages/column1",
            "route"=>"{}",
        ) );

        $this->insert("p3_page", array(
            "id"=>"7",
            "layout"=>"//layouts/main",
            "view"=>"//p3pages/column1",
            "route"=>"{}",
        ) );

        $this->insert("p3_page", array(
            "id"=>"9",
            "layout"=>"//layouts/main",
            "view"=>"//p3pages/column1",
            "route"=>"{}",
        ) );

        $this->insert("p3_page", array(
            "id"=>"10",
            "layout"=>"_TbNavbar",
            "view"=>"//p3pages/column1",
            "route"=>"{\"route\":\"site/index\"}",
        ) );

        $this->insert("p3_page", array(
            "id"=>"11",
            "layout"=>"//layouts/main",
            "view"=>"//p3pages/column1",
            "route"=>"{}",
        ) );

        $this->insert("p3_page", array(
            "id"=>"58",
            "layout"=>"//layouts/main",
            "view"=>"//p3pages/column1",
            "route"=>null,
        ) );




        // Data for table 'p3_page_meta'
        $this->insert("p3_page_meta", array(
            "id"=>"5",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"2",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 16:11:32",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-03-26 16:17:59",
            "modifiedBy"=>"1",
            "guid"=>"CC6C8184-0407-4573-A8B9-D7CE928C76D0",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"7",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"2",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 16:16:17",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-03-26 16:16:50",
            "modifiedBy"=>"1",
            "guid"=>"65F7097D-F807-47EA-8939-9DDB059F9A76",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"9",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"8",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 16:21:55",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-03-26 16:23:24",
            "modifiedBy"=>"1",
            "guid"=>"421318C4-F3AC-450F-B8AE-938A4B90FCF7",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"10",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 16:31:20",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-03-26 16:32:03",
            "modifiedBy"=>"1",
            "guid"=>"6C2E0F5E-C0F7-4B8F-9BF4-34FD496E4718",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"11",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"10",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-03-26 16:32:18",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-03-26 16:32:28",
            "modifiedBy"=>"1",
            "guid"=>"B4B60322-D61F-41B8-9DFB-BB7D0A477BA5",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"58",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"13",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-04-08 12:22:18",
            "createdBy"=>"13",
            "modifiedAt"=>"0000-00-00 00:00:00",
            "modifiedBy"=>null,
            "guid"=>"CF892B24-45EE-429D-ADEE-CD4DBD8D67A2",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );




        // Data for table 'p3_page_translation'
        $this->insert("p3_page_translation", array(
            "id"=>"1",
            "p3_page_id"=>"5",
            "language"=>"en",
            "seoUrl"=>null,
            "pageTitle"=>null,
            "menuName"=>"hallo",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"2",
            "p3_page_id"=>"7",
            "language"=>"en",
            "seoUrl"=>null,
            "pageTitle"=>null,
            "menuName"=>"test",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"3",
            "p3_page_id"=>"8",
            "language"=>"en",
            "seoUrl"=>"test",
            "pageTitle"=>"test",
            "menuName"=>"test",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"4",
            "p3_page_id"=>"9",
            "language"=>"en",
            "seoUrl"=>"test",
            "pageTitle"=>"test",
            "menuName"=>"test",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"5",
            "p3_page_id"=>"11",
            "language"=>"en",
            "seoUrl"=>"test",
            "pageTitle"=>"Test",
            "menuName"=>"Test",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"6",
            "p3_page_id"=>"12",
            "language"=>"en",
            "seoUrl"=>null,
            "pageTitle"=>"hans",
            "menuName"=>"Hans",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"7",
            "p3_page_id"=>"10",
            "language"=>"en",
            "seoUrl"=>null,
            "pageTitle"=>"Demo",
            "menuName"=>"Demo",
            "keywords"=>null,
            "description"=>null,
        ) );

        if (Yii::app()->db->schema instanceof CMysqlSchema)
           $this->execute('SET FOREIGN_KEY_CHECKS = 1;');

	}

	public function safeDown() {
		echo 'Migration down not supported.';
	}

}

?>
