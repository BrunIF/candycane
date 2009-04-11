<?php 
class ProjectFixture extends CakeTestFixture {
  var $name = 'Project';
  var $import = array('model'=>'Project');
  var $records = array(
    array('created_on'=>"2006-07-19 19:13:59 +02:00", 'name'=>"eCookbook", 'updated_on'=>"2006-07-19 22:53:01 +02:00",
          'projects_count'=>3, 'id'=>1, 'description'=>"Recipes management application", 
          'homepage'=>"http://ecookbook.somenet.foo/", 'is_public'=>true, 'identifier'=>"ecookbook", 'parent_id'=>null),
    array('created_on'=>"2006-07-19 19:14:19 +02:00", 'name'=>"OnlineStore", 'updated_on'=>"2006-07-19 19:14:19 +02:00",
          'projects_count'=>0, 'id'=>2, 'description'=>"E-commerce web site", 
          'homepage'=>"", 'is_public'=>false, 'identifier'=>"onlinestore", 'parent_id'=>null),
    array('created_on'=>"2006-07-19 19:15:21 +02:00", 'name'=>"eCookbook Subproject 1", 'updated_on'=>"2006-07-19 19:18:12 +02:00",
          'projects_count'=>0, 'id'=>3, 'description'=>"eCookBook Subproject 1", 
          'homepage'=>"", 'is_public'=>true, 'identifier'=>"subproject1", 'parent_id'=>1),
    array('created_on'=>"2006-07-19 19:15:51 +02:00", 'name'=>"eCookbook Subproject 2", 'updated_on'=>"2006-07-19 19:17:07 +02:00",
          'projects_count'=>0, 'id'=>4, 'description'=>"eCookbook Subproject 2",
          'homepage'=>"", 'is_public'=>true, 'identifier'=>"subproject2", 'parent_id'=>1),
    array('created_on'=>"2006-07-19 19:15:51 +02:00", 'name'=>"Private child of eCookbook", 'updated_on'=>"2006-07-19 19:17:07 +02:00",
          'projects_count'=>0, 'id'=>5, 'description'=>"This is a private subproject of a public project",
          'homepage'=>"", 'is_public'=>false, 'identifier'=>"private_child", 'parent_id'=>1)
  );
}
?> 