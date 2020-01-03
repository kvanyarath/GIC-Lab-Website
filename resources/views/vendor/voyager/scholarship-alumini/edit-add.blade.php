<?php
    $alumnis = App\Alumni::all();
    $scholarship_country = App\ScholarshipCountry::all();
?>

@extends('voyager::master')

<div class="page-content edit-add container-fluid">
    <h1 class="page-title" style="margin-top: 50px">
        <i class=""></i>
        Edit Scholarship Alumni


    </h1>
    
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form" class="" action="/admin/scholarship-alumini/{id}/edit" method="POST">
                         @csrf
                        <!-- CSRF TOKEN -->
                            <!-- panel-body -->
                            <div class="form-group col-md-12 ">
                                    <label >Alumni</label>
                                        <select class="form-control" name="alumni_id" >
                                        <?php foreach ($alumnis as $alumni) {
                                            if(isset($scholarship_alumni)){
                                                if($scholarship_alumni[0]->alumini_id == $alumni->id){
                                                    echo '<option value="'.$alumni->id.'" class="" selected="selected">'.$alumni->alumni_name.'</option>';            
                                                }else{
                                                    echo '<option value="'.$alumni->id.'">'.$alumni->alumni_name.'</option>';            
                                                }
                                            }else{
                                                echo '<option value="'.$alumni->id.'">'.$alumni->alumni_name.'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                            </div>
                            <!-- /panel-body -->
                            <!-- panel-body -->
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Title</label>
                                <input required="" type="text" class="form-control" name="title" placeholder="<?php if(isset($scholarship_alumni)){echo $scholarship_alumni[0]->title;}?>" value="<?php if(isset($scholarship_alumni)){echo $scholarship_alumni[0]->title;}?>">
                            </div>
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Scholarship Description</label>
                                <input required="" type="text" class="form-control" name="scholarship_desc" placeholder="<?php if(isset($scholarship_alumni)){echo $scholarship_alumni[0]->scholarship_description;}?>" value="<?php if(isset($scholarship_alumni)){echo $scholarship_alumni[0]->scholarship_description;}?>">
                            </div>
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Scholarship program</label>
                                <input required="" type="text" class="form-control" name="scholarship_program" placeholder="<?php if(isset($scholarship_alumni)){echo $scholarship_alumni[0]->scholarship_program;}?>" value="<?php if(isset($scholarship_alumni)){echo $scholarship_alumni[0]->scholarship_program;}?>">
                            </div>
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">LifeOverthere</label>
                                <input required="" type="text" class="form-control" name="LifeOverthere" placeholder="<?php if(isset($scholarship_alumni)){echo $scholarship_alumni[0]->life_overthere;}?>" value="<?php if(isset($scholarship_alumni)){echo $scholarship_alumni[0]->life_overthere;}?>">
                            </div>
                            <div class="form-group col-md-12 ">
                                    <label >Country</label>
                                        <select class="form-control" name="country" >
                                        <?php foreach ($scholarship_country as $country) {
                                            if(isset($scholarship_alumni)){
                                                if($scholarship_alumni[0]->country == $country->id){
                                                    echo '<option value="'.$country->id.'" class="" selected="selected">'.$country->name.'</option>';            
                                                }else{
                                                    echo '<option value="'.$country->id.'">'.$country->name.'</option>';            
                                                }
                                            }else{
                                                echo '<option value="'.$country->id.'">'.$country->name.'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                            </div>
                            <?php if(isset($scholarship_alumni)){
                            echo '<input type="hidden" value="'.$scholarship_alumni[0]->id.'" name="Sid">';}
                            ?>      
                            <!-- /panel-body -->
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

 <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>