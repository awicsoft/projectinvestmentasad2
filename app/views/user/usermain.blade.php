@extends('main')
@section('header')
 <a class="brand" href="#">User Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> {{{$user->name or $user->username}}} <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="profile">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                
@stop
@section('sidebar')
<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                         
                         <li>
                            <a href="GenerateReport"><i class="icon-chevron-right"></i>
                               
                                
                                Generate Report</a>
                        </li>
                         <li>
                            <a href="Report"><i class="icon-chevron-right"></i>
                               
                                
                               Report</a>
                        </li>
                        <li>
                            <a href="PressRelease"><i class="icon-chevron-right"></i>
                               
                                
                               Press Release</a>
                        </li>
                        <li>
                            <a href="Columns"><i class="icon-chevron-right"></i>
                               
                                
                               columns</a>
                        </li>
                        <li>
                            <a href="City"><i class="icon-chevron-right"></i>
                               
                                
                                City</a>
                        </li>
                         <li>
                            <a href="Newspaper"><i class="icon-chevron-right"></i>
                               
                                
                                Newspaper</a>
                        </li>
                        <li>
                            <a href="Leader"><i class="icon-chevron-right"></i>
                               
                                
                                Leader</a>
                        </li>
                        
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                        </li>
                    </ul>
@stop