@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Table -->
            <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="genral">

                <!-- Table heading -->
                <thead class="bg-gray">
                <tr>
                    <th>Post Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <!-- // Table heading END -->

                <!-- Table body -->
                <tbody>


                <?php
                foreach($posts as $post){
                //print_r($post);exit;
                ?>
                <!-- Table row -->
                <tr class="gradeX">
                    <td   ><?php echo $post->post_title;?></td>
                    <td><?php echo $post->post_content?></td>
                    <td>
                        <a  href="#" onclick="callCrudAction('users',<?php echo $post->id;?>,'delete_data')" id="<?php echo $post->id;?>">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                        <a  href="<?php  url();?><?php echo $post->id;?>/edit_post" >
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    <!--<a  href="<?php  url();?>alpha/reset_password/<?php echo $post->id;?>" >
                          <span class="glyphicon glyphicon-home"></span>
                      </a>-->
                    </td>

                </tr>
                <!-- // Table row END -->

                <?php } ?>




                </tbody>
                <!-- // Table body END -->

            </table>
            <!-- // Table END -->
        </div>
    </div>
</div>
@endsection
