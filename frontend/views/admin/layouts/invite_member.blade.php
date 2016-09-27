<div class="tab-content">
                    <div class="tab-pane active" id="home-12">
                        <form method="post" action="{!! url('university/inviteStudent') !!}" name="form" class="p-20" novalidate>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="text" ng-model="student.register_id" name="registration_id" placeholder="Registration Id"  class="custom_form-control lb" id="field-1" required/>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input name="name" ng-model="student.name"  type="text" placeholder="Name" class="custom_form-control lb" id="field-2" required/>


                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="email" name="email" ng-model="student.email" class="custom_form-control lb" placeholder="Email" id="field-3" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="text" name="phone" ng-model="student.email" class="custom_form-control lb" placeholder="Phone" id="field-3" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <label for="field-2" class="control-label">Department</label>
                                            {!! Form::select('department_id', $department, [], ['class' =>'custom_form-control lb', 'id'=>'field-4','required']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="batch_year" ng-model="student.batch" placeholder="Batch year" class="custom_form-control lb" id="field-5">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="custom_form-control lb" id="field-6" name="gender" placeholder="Gender">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="custom_form-control lb" id="dob" placeholder="Date Of Birth DD/MM/YYYY" name="dob">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-9" class="form-control">Upload CSV</label>
                                            <input type="file" class="form-control" id="field-9" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Invite</button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane" id="profile-12">
                    <form action="{!! url('university/inviteFaculty') !!}" name="instForm" class="p-20" method="post" novalidate>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" ng-model="inst.name" class="custom_form-control lb" palceholder="Name" id="field-2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="custom_form-control lb" id="field-3" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-4" class="control-label">Department</label>
                                        {!! Form::select('department_id', $department, [], ['class' =>'custom_form-control lb', 'id'=>'field-4','required']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="custom_form-control lb" id="field-8" placeholder="Date Of Birth DD/MM/YYYY" name="dob">                                                   </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="col-xs-5">
                                        {!! Form::select('from[]', getSubjects(),[], ['class' =>'form-control', 'id'=>'multi_d', 'size'=>10, 'multiple']) !!}
                                        {{--<select name="from[]" id="multi_d" class="form-control" size="10" multiple="multiple">--}}
                                        {{--<option value="1">Plant Science </option>--}}
                                        {{--<option value="2">Bachelor of Business Management</option>--}}
                                        {{--<option value="3">Bachelor of Computer Application</option>--}}
                                        {{--<option value="4">Aeronautic Engineering</option>--}}
                                        {{--<option value="5">Mechanical Engineering</option>--}}
                                        {{--<option value="6"> Bachelor of Commerce </option>--}}
                                        {{--<option value="7"> Bachelor of Art </option>--}}

                                        {{--</select>--}}
                                    </div>

                                    <div class="col-xs-2">
                                        <button type="button" id="multi_d_rightAll" class="btn btn-default btn-block" style="margin-top: 20px;"><i class="glyphicon glyphicon-forward"></i></button>
                                        <button type="button" id="multi_d_rightSelected" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
                                        <button type="button" id="multi_d_leftSelected" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                        <button type="button" id="multi_d_leftAll" class="btn btn-default btn-block"><i class="glyphicon glyphicon-backward"></i></button>

                                    </div>

                                    <div class="col-xs-5">
                                        <select name="to[]" id="multi_d_to" class="form-control" size="10" multiple="multiple"></select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Invite</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="messages-12">
                    <form action="{!! url('university/inviteAdmin') !!}" name="" class="p-20" method="post" novalidate>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <input type="text" class="custom_form-control lb" id="field-2" name="name" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="custom_form-control lb" id="field-3" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Invite</button>
                        </div>
                    </form>
                </div>