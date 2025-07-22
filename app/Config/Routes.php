<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Welcome::index');
$routes->get('/newTicket', 'NewTicket::index');

$routes->get('/registration', 'Registration::index');
$routes->post('/registration', 'Registration::registration');
$routes->get('/logout', 'Registration::logout');


$routes->get('/access_level' , 'access_controller::index');
$routes->post('/access/create','access_controller::create');


$routes->get('/login', 'Login::index');
$routes->post('/login', 'Registration::login');

$routes->get('/ticketStatus', 'TicketStatus::index');

$routes->get('/department' , 'Department::index');
$routes->post('department/Create', 'Department::create');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/agentDirectory', 'AgentDirectory::index');
$routes->get('/account', 'Account::index');


$routes->get('/userDirectory', 'UserDirectory::index');
$routes->get('/organizations', 'Organizations::index');
$routes->post('organizations/store', 'Organizations::create');

$routes->get('/faqs', 'Faqs::index');
$routes->get('/categories', 'Categories::index');
$routes->get('/cannedResponse', 'CannedResponse::index');


$routes->get('/ticketOpen', 'MyTicket::index');
$routes->get('/myTicket', 'MyTicket::index');
$routes->get('/ticketClosed', 'TicketClosed::index');
$routes->get('/ticketSearch', 'TicketSearch::index');


$routes->get('/taskOpen', 'TaskOpen::index');
$routes->post('/task/create' , 'MyTask::create');

$routes->get('/myTask', 'MyTask::index');
$routes->get('/taskCompleted', 'TaskCompleted::index');
$routes->get('/taskUpdates', 'TaskUpdates::index');
// $routes->get('/newTaskModal', 'NewTaskModal::index');
$routes->get('/viewTask', 'ViewTask::index');
$routes->get('/viewTicket', 'ViewTicket::index');
// $routes->get('/statusModal', 'StatusModal::index');
// $routes->get('/dueDateModal', 'DueDateModal::index');
// $routes->get('/departmentModal', 'DepartmentModal::index');
// $routes->get('/assignedToModal', 'AssignedToModal::index');
// $routes->get('/collaboratorModal', 'CollaboratorModal::index');
// $routes->get('/complexityModal', 'ComplexityModal::index');
// $routes->get('/testedOnModal', 'TestedOnModal::index');
// $routes->get('/testingStatusModal', 'TestingStatusModal::index');
// $routes->get('/taskTypeModal', 'TaskTypeModal::index');
// $routes->get('/fromDeptModal', 'FromDepartmentModal::index');
// $routes->get('/misroutedModal', 'MisroutedModal::index');
// $routes->get('/infoMissingModal', 'InfoMissingModal::index');
// $routes->get('/forgotPasswordModal', 'ForgotPasswordModal::index');


$routes->get('/ticketDashBoard', 'TicketDashBoard::index');
$routes->get('/agentHistory', 'AgentHistory::index');
$routes->get('/notifications', 'Notifications::index');