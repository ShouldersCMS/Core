@extends('shoulderscms::AdminLTE.layouts.master')

@section('main')
	@if (!empty($user))
	   {{ Form::model($user, array('url' => ['admin/users', $user['id']], 'method' => 'put')) }}

    @else
        {{ Form::model($user, array('url' => 'admin/users')) }}
    @endif
    
	 <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-8">
						<div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-file-o"></i> User</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                	<div class="row">
                                		<div class="col-md-6">
                                			<div class="form-group">
		                                        <label for="username">Username:</label>
		                                        {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
		                                    </div>		
                                		</div>
                                		<div class="col-md-6">
                                			<div class="form-group">
		                                        <label for="email">Email:</label>
		                                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
		                                    </div>		
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col-md-6">
                                			<div class="form-group">
                                				<label for="">First Name:</label>
                                				{{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
                                			</div>	
                                		</div>
                                		<div class="col-md-6">
                                			<div class="form-group">
                                				<label for="">Last Name:</label>
                                				{{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
                                			</div>	
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col-md-6">
                                			<label for="">Password:</label>
                                			{{ Form::password('password', ['class' => 'form-control']) }}
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col-md-12">
                                			<label for="">Bio:</label>
                                			{{ Form::textarea('bio', null, ['class' => 'form-control textarea', 'rows' => '10', 'placeholder' => 'Bio']) }}
                                		</div>
                                	</div>
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="box box-info">
                            <div class="box-header">
                                <i class="fa fa-gears"></i>
                                <h3 class="box-title">Settings</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                            	<label for="meta_robots">Robots: </label>
                                
                                {{ Form::select('meta_robots', array(
                                    'INDEX, FOLLOW' => 'Index and follow (Recomended)',
                                    'NOINDEX, FOLLOW' => 'No Index, follow',
                                    'INDEX, NOFOLLOW' => 'Index, No Follow',
                                    'NOINDEX, NOFOLLOW' => 'No Index, No Follow',
                                ), null, ['class' => 'form-control']) }}
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{ Form::close() }}

            <script type="text/javascript">

            $(function() {
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        
            </script>
@stop