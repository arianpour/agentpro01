@extends('layout.master')
@section('title','Contacts')
@section('page-header-scripts')
		<!-- Plugins For This Page -->
	<link rel="stylesheet" href="vendor/filament-tablesaw/tablesaw.css">
	<link rel="stylesheet" href="vendor/slidepanel/slidePanel.css">

@stop
@section('page-js')

			<!-- Page -->
	<link rel="stylesheet" href="css/apps/contacts.css">
	<!-- Inline -->
	<style>
		.animation-delay-100 {
			-webkit-animation-delay: 100ms;
			animation-delay: 100ms;
		}

		.animation-duration-300 {
			-webkit-animation-duration: 300ms;
			animation-duration: 300ms;
		}
	</style>

@stop
@section('body-class','app-contacts')
@section('page')
	<div class="page bg-white animsition">
		<div class="page-aside">
			<!-- Contacts Sidebar -->
			<div class="page-aside-switch">
				<i class="icon wb-chevron-left" aria-hidden="true"></i>
				<i class="icon wb-chevron-right" aria-hidden="true"></i>
			</div>
			<div class="page-aside-inner">
				<div class="page-aside-section">
					<div class="list-group">
						<a class="list-group-item" href="javascript:void(0)">
							<span class="item-right">61</span><i class="icon wb-inbox" aria-hidden="true"></i>All contacts</a>
					</div>
				</div>
				<div class="page-aside-section">
					<h5 class="page-aside-title">LABEL</h5>
					<div class="list-group has-actions">
						<div class="list-group-item">
							<div class="list-content">
								<span class="item-right">10</span>
								<span class="list-text">Work</span>
								<div class="item-actions">
									<span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
									<span class="btn btn-pure btn-icon"><i class="icon wb-trash" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="list-editable">
								<div class="form-group form-material">
									<input type="text" class="form-control empty" name="label" data-bind=".list-text"
									       value="Work">
									<button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close"
									        aria-label="Close" aria-expanded="true"></button>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="list-content">
								<span class="item-right">5</span>
								<span class="list-text">Family</span>
								<div class="item-actions">
									<span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
									<span class="btn btn-pure btn-icon"><i class="icon wb-trash" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="list-editable">
								<div class="form-group form-material">
									<input type="text" class="form-control empty" name="label" data-bind=".list-text"
									       value="Family">
									<button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close"
									        aria-label="Close" aria-expanded="true"></button>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="list-content">
								<span class="item-right">16</span>
								<span class="list-text">Private</span>
								<div class="item-actions">
									<span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
									<span class="btn btn-pure btn-icon"><i class="icon wb-trash" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="list-editable">
								<div class="form-group form-material">
									<input type="text" class="form-control empty" name="label" data-bind=".list-text"
									       value="Private">
									<button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close"
									        aria-label="Close" aria-expanded="true"></button>
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<div class="list-content">
								<span class="item-right">30</span>
								<span class="list-text">Friends</span>
								<div class="item-actions">
									<span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
									<span class="btn btn-pure btn-icon"><i class="icon wb-trash" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="list-editable">
								<div class="form-group form-material">
									<input type="text" class="form-control empty" name="label" data-bind=".list-text"
									       value="Friends">
									<button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close"
									        aria-label="Close" aria-expanded="true"></button>
								</div>
							</div>
						</div>
						<a class="list-group-item" href="javascript:void(0)">
							<i class="icon wb-plus" aria-hidden="true"></i> Add New Label
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Contacts Content -->
		<div class="page-main">
			
			<!-- Contacts Content Header -->
			<div class="page-header">
				<h1 class="page-title">Contact List</h1>
				<div class="page-header-actions">
					<form>
						<div class="input-search input-search-dark">
							<i class="input-search-icon wb-search" aria-hidden="true"></i>
							<input type="text" class="form-control" name="" placeholder="Search...">
						</div>
					</form>
				</div>
			</div>
			
			<!-- Contacts Content -->
			<div class="page-content page-content-table">
				
				<!-- Actions -->
				<div class="page-content-actions">
					<div class="pull-right">
						<div class="dropdown">
							<button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
							        aria-expanded="false">
								More
								<span class="icon wb-chevron-down-mini" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="javascript:void(0)">More</a></li>
								<li><a href="javascript:void(0)">More</a></li>
							</ul>
						</div>
						<button type="button" class="btn btn-outline btn-default btn-md empty-btn">Empty All</button>
					</div>
					<div class="btn-group">
						<div class="dropdown">
							<button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
							        aria-expanded="false" type="button"><i class="icon wb-folder" aria-hidden="true"></i></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="javascript:void(0)">work</a></li>
								<li><a href="javascript:void(0)">Family</a></li>
								<li><a href="javascript:void(0)">Private</a></li>
								<li><a href="javascript:void(0)">Friends</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0)">Trash</a></li>
								<li><a href="javascript:void(0)">Spam</a></li>
							</ul>
						</div>
						<div class="dropdown">
							<button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
							        aria-expanded="false" type="button"><i class="icon wb-tag" aria-hidden="true"></i></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="javascript:void(0)">work</a></li>
								<li><a href="javascript:void(0)">Family</a></li>
								<li><a href="javascript:void(0)">Private</a></li>
								<li><a href="javascript:void(0)">Friends</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				
				<!-- Contacts -->
				@if(!$contactList->isEmpty())
				<table class="table tablesaw"
				       data-tablesaw-mode="stack"
				       data-plugin="animateList"
				       data-animate="fade" data-child="tr" data-selectable="selectable">
					<thead>
					<tr>
						<th class="cell-60" scope="col" data-tablesaw-sortable-col
						    data-tablesaw-priority="3">
                <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                  <input type="checkbox" class="contacts-checkbox selectable-all"
                         id="select_all"
		                  />
                  <label for="select_all"></label>
                </span>
						</th>
						<th class="cell-300" scope="col"
						    data-tablesaw-sortable-col data-tablesaw-priority="3">Name</th>
						<th class="cell-300" scope="col"
						    data-tablesaw-sortable-col data-tablesaw-priority="3">Phone</th>
						<th scope="col" data-tablesaw-sortable-col
						    data-tablesaw-priority="4">Email</th>
					</tr>
					</thead>
					<tbody>
					@foreach($contactList as $contact)
					<tr data-url="panel" data-toggle="slidePanel">
						<td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item"
                         id="contacts_1"
		                  />
                  <label for="contacts_1"></label>
                </span>
						</td>
						<!-- The contacts Lists -->
						<td class="cell-300">
							<a class="avatar" href="javascript:void(0)">
								<img class="img-responsive" src="portraits/1.jpg"
								     alt="...">
							</a>
							{{ $contact->name }}
						</td>
						<td class="cell-300">{{ $contact->phone }}</td>
						<td>{{ $contact->email }}</td>
					</tr>
						@endforeach
					</tbody>
				</table>
				
				<ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
				@else
				<table class="table tablesaw">
					<td> No Contacts added</td>
				</table>
				@endif
			</div>
		</div>
	</div>
	
	<!-- Add Mail Form -->
	<div class="site-action animation-duration-300">
		<button type="button" class="btn-raised btn btn-success btn-floating">
			<i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
			<i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
		</button>
		<div class="site-action-buttons">
			<button type="button" class="btn-raised btn btn-success btn-floating animation-slide-bottom animation-delay-100">
				<i class="icon wb-trash" aria-hidden="true"></i>
			</button>
			<button type="button" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
				<i class="icon wb-folder" aria-hidden="true"></i>
			</button>
		</div>
	</div>
	
	<div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm"
	     role="dialog" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
					<h4 class="modal-title">Create New Contact</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="phone" placeholder="Phone" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="Email" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="birthday" placeholder="Birthday"
									/>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" data-dismiss="modal" type="submit">Send</button>
					<a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
				</div>
			</div>
		</div>
	</div>

@stop

@section('page-scripts')
		<!-- Plugins For This Page -->
	<script src="vendor/filament-tablesaw/tablesaw.js"></script>
	<script src="vendor/slidepanel/jquery-slidePanel.js"></script>
	<script src="vendor/aspaginator/jquery.asPaginator.min.js"></script>
	<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
	
	
	<!-- Scripts For This Page -->
	<script src="js/plugins/sticky-header.js"></script>
	<script src="js/components/aspaginator.js"></script>
	<script src="js/apps/app.js"></script>
	<script src="js/apps/contacts.js"></script>
	<script src="js/components/animate-list.js"></script>
	<script src="js/components/jquery-placeholder.js"></script>
	<script src="js/components/material.js"></script>
	<script src="js/components/selectable.js"></script>
	
	<script>
		(function(document, window, $) {
			'use strict';
			var AppContacts = window.AppContacts;
			
			$(document).ready(function() {
				AppContacts.run();
			});
		})(document, window, jQuery);
	</script>
@stop
