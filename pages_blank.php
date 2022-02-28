<?php include './header.php'; ?>
<style type="text/css">
    /*Now the CSS*/
    * {margin: 0; padding: 0;}

    .tree ul {
        padding-top: 20px; position: relative;

        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    .tree li {
        float: left; text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;

        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    /*We will use ::before and ::after to draw the connectors*/

    .tree li::before, .tree li::after{
        content: '';
        position: absolute; top: 0; right: 50%;
        border-top: 1px solid #ccc;
        width: 50%; height: 20px;
    }
    .tree li::after{
        right: auto; left: 50%;
        border-left: 1px solid #ccc;
    }

    /*We need to remove left-right connectors from elements without 
    any siblings*/
    .tree li:only-child::after, .tree li:only-child::before {
        display: none;
    }

    /*Remove space from the top of single children*/
    .tree li:only-child{ padding-top: 0;}

    /*Remove left connector from first child and 
    right connector from last child*/
    .tree li:first-child::before, .tree li:last-child::after{
        border: 0 none;
    }
    /*Adding back the vertical connector to the last nodes*/
    .tree li:last-child::before{
        border-right: 1px solid #ccc;
        border-radius: 0 5px 0 0;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
    }
    .tree li:first-child::after{
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
    }

    /*Time to add downward connectors from parents*/
    .tree ul ul::before{
        content: '';
        position: absolute; top: 0; left: 50%;
        border-left: 1px solid #ccc;
        width: 0; height: 20px;
    }

    .tree li div{
        border: 1px solid #ccc;
        padding: 5px 10px;
        text-decoration: none;
        color: #666;
        font-family: arial, verdana, tahoma;
        font-size: 11px;
        display: inline-block;

        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;

        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    /*Time for some hover effects*/
    /*We will apply the hover effect the the lineage of the element also*/
    .tree li div:hover, .tree li div:hover+ul li div {
        background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
    }
    /*Connector styles on hover*/
    .tree li div:hover+ul li::after, 
    .tree li div:hover+ul li::before, 
    .tree li div:hover+ul::before, 
    .tree li div:hover+ul ul::before{
        border-color:  #94a0b4;
    }
    .min_chars{
   display: block;
  width: 40px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.tooltiptext {
  visibility: hidden;
  min-width: 120px;
  background-color: black;
  color: #fff;
  text-align: left;
  border-radius: 6px;
  padding: 8px;
/*  word-spacing: 1em;*/

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}
.tooltiptext .table .tr .td{
    padding: 2px;
}
</style>
<main class="content">
   <div class="container-fluid p-0">
      <h1 class="h3 mb-3">Blank Page</h1>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0">Empty card</h5>
                  <div class="container-fluid">
    <div align="center">
        <div class="user">
            <a href="tree_view.php?no=100" title="Package Amount 1800 (1800.00), User Id: superuser, , DOJ: 06-01-2016 13:00 PM , Topup Date: 16-05-2020 13:32 PM , Downline:Array"><br>
superuser<br>
                <img src="assets/img/photos/user_2.png">
            </a>
        </div>
     <div style="text-align: center; min-width: 300px; margin-left: 200px;">
     </div>
    </div>

</div>
               </div>
               <div class="card-body">
               </div>
            </div>
         </div>
      </div>
   </div>
    <script>
    $(function () {
        $(document).tooltip({
            position: {
                my: "center bottom-20",
                at: "center top",
                using: function (position, feedback) {
                    $(this).css(position);
                    $("<div>")
                            .addClass("arrow")
                            .addClass(feedback.vertical)
                            .addClass(feedback.horizontal)
                            .appendTo(this);
                }
            }
        });
    });

    function viewNodeInfo(nodeId) {
        if ($("#" + nodeId).css('display') == 'none' || $("#" + nodeId).css("visibility") == "hidden") {
            $("#" + nodeId).css({"visibility": "visible", });
        } else {
            $("#" + nodeId).css({"visibility": "hidden", });
        }

    }
</script>
</main>
<?php include './footer.php'; ?>