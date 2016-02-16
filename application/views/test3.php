<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $this->config->item('title'); ?></title>

    <link href="<?php echo base_url('multiselect/jquery.multiselect2side.css'); ?>" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('multi-select/test/src/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('multiselect/jquery.multiselect2side.js'); ?>"></script>
    
  </head>

  <body>
    <input id="add-select" type="button" value="添加">
    <input id="del-select" type="button" value="删除">
    <select id="kkdd">
      <option value ="" selected></option>
      <option value ="惠城区">惠城区</option>
      <option value ="仲恺">仲恺</option>
    </select>
    <select name="liOption[]" id='liOption' multiple='multiple' size='8'> 
        <option value="PHP">PHP</option>
        <option value="MYSQL">MYSQL</option>
        <option value="ASP.NET">ASP.NET</option>
        <option value="XHTML">XHTML</option>
        <option value="CSS">CSS</option>
        <option value="JQUERY">JQUERY</option>
    </select>
    <script type="text/javascript">
      $(function(){ 
         $("#liOption").multiselect2side({ 
              selectedPosition: 'right', 
              moveOptions: false, 
              labelsx: '待选区', 
              labeldx: '已选区' 
         }); 
      });
      $('#del-select').click(function(){
        //$('#liOption').multiselect2side('destroy');
        $('#liOption option').remove();
      });
      $('#add-select').click(function(){
        $('#liOption').multiselect2side('addOption', {name: 'test selected', value: 'test1', selected: true})  
        $('#liOption').multiselect2side('addOption', {name: 'test not selected', value: 'test2', selected: false});  
      });
    </script>
  </body>
</html>