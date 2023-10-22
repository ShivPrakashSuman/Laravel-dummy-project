@extends('layouts.default')
    @section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <style>
         #sideBar {
            padding-top: 20px;
            padding-left: 0px;
            padding-right: 0px;
            z-index: 2;
        }

        a[data-toggle="collapse"] i.fa-plus-square-o {
            display: none;
        }

        a[data-toggle="collapse"] i.fa-minus-square-o {
            display: inline-block;
        }

        a[data-toggle="collapse"].collapsed i.fa-plus-square-o {
            display: inline-block;
        }

        a[data-toggle="collapse"].collapsed i.fa-minus-square-o {
            display: none;
        }
        .sortable-formbuilder,
        .sortable-stdFields {
            padding-left: 0px;
            -moz-padding-start: 0px;
            -webkit-padding-start: 0px;
            -khtml-padding-start: 0px;
            -o-padding-start: 0px;
            padding-start: 0px;
            list-style: none;
            min-height: 40px;
        }
 
        .box{
            background: antiquewhite;
            height: 28px;
            border: 1px solid;
        }

         /* /  -------------- toolbar classes  --------------- / */
         .toolbar {
            box-shadow: 1px 1px 10px;
            width: 100%;
            height: 14%;
            float: left;
            padding:15px;
            Display:block;
            margin: 20px 0px;
            border-radius: 5px;
        }
        .toolbar > .tool-item{
            padding: 10px;
            margin-top: 5px;
        }
        .toolbar > .tool-item > .tools{
            width:100%;
        }


    /* -------------- editor classes  ---------------  */
        .editor-area{
            display: block;
            width: 100%;
            float: left;
            padding: 18px;
            border: 2px dotted;
        }

        .editor-area > .tool-item{
            padding: 10px;
            / border:1px solid #d6d6d9; /
            border-radius:5px;
            margin-top: 5px;
        }
        .editor-area > .tool-item > .tools{
            width:100%;
            height:35px;
        }
        .box-man{
            margin-left: 5px;
            padding: 20px;
            background: #ebebeb;    
        }
    </style>
    <!------ Include the above in your HEAD tag ---------->
    <section class="get-in-touch" style="max-width: none;">
   
        <div class='row'>
            <div class="col-md-3" id="sideBar" style="background: #f0f0f0;">
                <div class="tab-content" id="sidebar-tab-content">
                    <div role="tabpanel" class="tab-pane active" id="addFieldTab" style="padding: 20px;">
                        <p>
                            <a role="button" data-toggle="collapse" href="#stdFields">
                                <i class="fa fa-lg fa-plus-square-o"></i><i class="fa fa-lg fa-minus-square-o"></i> STANDARD FIELDS
                            </a>
                        </p>
                        <div class="collapse in" id="stdFields">
                            <ul ng-model="dragElements" class="sortable-stdFields ng-pristine ng-untouched ng-valid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <li draggable="true" class="dragElement-wrapper ng-scope" ng-repeat="ele in dragElements" element-draggable="" data-index="0">
                                            <div class="row toolbar" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="src_copy"  draggable="true"  >
                                                <div class="col-sm-6 box">
                                                
                                                </div>
                                                <div class="col-sm-6 box">

                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li draggable="true" class="dragElement-wrapper ng-scope" ng-repeat="ele in dragElements" element-draggable="" data-index="0">
                                            <div class="row toolbar" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="src_copy2"  draggable="true"  >
                                                <div class="col-sm-4 box">
                                                
                                                </div>
                                                <div class="col-sm-4 box">
                                                
                                                </div>
                                                <div class="col-sm-4 box">

                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-6">
                                    <li draggable="true" class="dragElement-wrapper ng-scope" ng-repeat="ele in dragElements" element-draggable="" data-index="0">
                                            <div class="row toolbar" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="src_copy3"  draggable="true"  >
                                                <div class="col-sm-3 box">
                                                
                                                </div>
                                                <div class="col-sm-3 box">
                                                
                                                </div>
                                                <div class="col-sm-3 box">

                                                </div>
                                                <div class="col-sm-3 box">
                                                
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li draggable="true" class="dragElement-wrapper ng-scope" ng-repeat="ele in dragElements" element-draggable="" data-index="3">
                                        <div class="row toolbar" ondragend="dragend_handler(event);" ondragstart="dragstart_handler(event);" id="src_copy4"  draggable="true"  >
                                                <div class="col-sm-2 box">
                                                
                                                </div>
                                                <div class="col-sm-4 box">
                                                
                                                </div>
                                                <div class="col-sm-1 box">

                                                </div>
                                                <div class="col-sm-5 box">
                                                
                                                </div>
                                            </div>
                                        </li>
                                    </div>                                   
                                </div>
                            </ul>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-md-9 text-center" id="main-content">
                <div class="row box-man">
                    <h3 style="margin: 0;"><b>Add Field Here</b></h3>
                    <div class="editor-area" id="dest_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
                    </div>
                </div>
            </div>
    </section>
    <script>
        function dragstart_handler(ev) {
            console.log("dragStart");
            ev.dataTransfer.setData("text", ev.target.id);
            ev.effectAllowed = "copyMove";
        }

        function dragover_handler(ev) {
            console.log("dragOver");
            ev.currentTarget.style.background = "";
            ev.preventDefault();
        }

        function drop_handler(ev) {
            console.log("Drop");
            ev.preventDefault();
            var id = ev.dataTransfer.getData("text");
            if (id == "src_move" && ev.target.id == "dest_move")
                ev.target.appendChild(document.getElementById(id));
            // Copy the element if the source and destination ids are both "copy"
            if (id == "src_copy" && ev.target.id == "dest_copy") {
                var nodeCopy = document.getElementById(id).cloneNode(true);
                nodeCopy.id = "newId";
                ev.target.appendChild(nodeCopy);
            }
            if (id == "src_copy1" && ev.target.id == "dest_copy") {
                var nodeCopy = document.getElementById(id).cloneNode(true);
                nodeCopy.id = "newId";
                ev.target.appendChild(nodeCopy);
            }
            if (id == "src_copy2" && ev.target.id == "dest_copy") {
                var nodeCopy = document.getElementById(id).cloneNode(true);
                nodeCopy.id = "newId";
                ev.target.appendChild(nodeCopy);
            }
            if (id == "src_copy3" && ev.target.id == "dest_copy") {
                var nodeCopy = document.getElementById(id).cloneNode(true);
                nodeCopy.id = "newId";
                ev.target.appendChild(nodeCopy);
            }
            if (id == "src_copy4" && ev.target.id == "dest_copy") {
                var nodeCopy = document.getElementById(id).cloneNode(true);
                nodeCopy.id = "newId";
                ev.target.appendChild(nodeCopy);
            }
            if (id == "src_copy5" && ev.target.id == "dest_copy") {
                var nodeCopy = document.getElementById(id).cloneNode(true);
                nodeCopy.id = "newId";
                ev.target.appendChild(nodeCopy);
            }
            if (id == "src_copy6" && ev.target.id == "dest_copy") {
                var nodeCopy = document.getElementById(id).cloneNode(true);
                nodeCopy.id = "newId";
                ev.target.appendChild(nodeCopy);
            }
        }

    </script>
@stop