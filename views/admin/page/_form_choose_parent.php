<div class="popup_window" id="choose_parent_window" >
    <input type="hidden" value="<?=$model->p_pid ?>" />
    <?php
    //var_dump(Page::getTreeData());
    $this->beginWidget('CTreeView', array(
                'data'=>Page::getTreeData(),
            ));
    $this->endWidget();
    ?>
</div>

<script>
    $(function() {
        $("#choose_parent_window").dialog({
            autoOpen: false,
            title: "Выберите родительскую страницу",
            buttons: {
                "сбросить": function () {
                    
                },
                "выбрать": function () {
                    
                },
                "отмена": function () {
                    $(this).dialog("close");
                }
            }
        });
        
        $("<?=$buttonSelector ?>").click(function() {
            $("#choose_parent_window").dialog("open");
        });
        
        $("<?=$parentUrlSelector ?>").click(function() {
            $("#choose_parent_window").dialog("open");
        });
    });
</script>
<style>
    .choosen {
        background-color: red;
    }
</style>
    