<div data-am-webuploader-simple="{id:'<?= $field['field_name']; ?>', name:'<?= $field['field_name']; ?>[]',pick:{id:'#<?= $field['field_name']; ?>', multiple:true}, accept:{title:'file', mimeTypes: '<?= self::$accept['upload_file'] ?? '' ?>' }, content:'<?= $field['value'] ?? ''; ?>', type:'file',server:'/?m=Upload&a=ueditor&method=POST&action=uploadfile'}"></div>