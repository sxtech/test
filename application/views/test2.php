<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $this->config->item('title'); ?></title>

    <link href="<?php echo base_url('multi-select/css/multi-select.css'); ?>" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('multi-select/test/src/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('multi-select/js/jquery.multi-select.js'); ?>"></script>
    
  </head>

  <body>
    <select id="kkdd">
      <option value ="" selected></option>
      <option value ="惠城区">惠城区</option>
      <option value ="仲恺">仲恺</option>
    </select>
    <select id='pre-selected-options' multiple='multiple'>
      
      <option value='elem_1' selected>elem 1</option>
      <option value='elem_2'>elem 2</option>
      <option value='elem_3'>elem 3</option>
      <option value='elem_4' selected>elem 4</option>
      <option value='elem_100'>elem 100</option>
      
    </select>
    <input id="select-all" type="button" value="全选" />
    <input id="deselect-all" type="button" value="全删" />
    <input id="add-select" type="button" value="添加">
    <input id="del-select" type="button" value="删除">
    <script type="text/javascript">
      $('#pre-selected-options').multiSelect();
      $('#select-all').click(function(){
        $('#pre-selected-options').multiSelect('select_all');
        return false;
      });
      $('#deselect-all').click(function(){
        $('#pre-selected-options').multiSelect('deselect_all');
        return false;
      });
      $('#add-select').click(function(){
        $('#pre-selected-options').multiSelect('addOption', { value: 'test', text: 'test'});
        $('#pre-selected-options').multiSelect('addOption', { value: 'test2', text: 'test2'});
      });
      $('#del-select').click(function(){
        alert('del');
        $('#pre-selected-options').html("");
      });
      $("#kkdd").change(function(){
        alert($("#kkdd").val());
      });
    </script>
  </body>
</html>