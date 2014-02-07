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
    function openChooseParentWindow() {
        var parent_id = $("#parent_id").val();
        $(".tree_item").removeClass("choosen");
        if (parent_id)
            $("#id"+parent_id).addClass("choosen");
        $("#choose_parent_window").dialog("open");
    }
    
    $(function() {
        $("#choose_parent_window").dialog({
            autoOpen: false,
            title: "Выберите родительскую страницу",
            buttons: {
                "сбросить": function () {
                    $("#parent_id").val('')
                    $("#parent_url").val('')
                    $(this).dialog("close");
                },
                "выбрать": function () {
                    var parent_id = $(".tree_item.choosen").attr("id").substr(2);
                    $("#parent_id").val(parent_id);
                    var parent_url = $(".tree_item.choosen").html();
                    $("#parent_url").val(parent_url)
                    $(this).dialog("close");
                },
                "отмена": function () {
                    $(this).dialog("close");
                }
            }
        });
        
        $("<?=$buttonSelector ?>").click(function() {
            openChooseParentWindow();
        });
        
        $("<?=$parentUrlSelector ?>").click(function() {
            openChooseParentWindow();
        });
        
        $(".tree_item").click(function() {
            $(".tree_item").removeClass("choosen");
            $(this).addClass("choosen");
        });
    });
</script>
<style>
    .choosen {
        background-color: red;
    }
</style>
    