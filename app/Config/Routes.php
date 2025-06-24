<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Welcome::index');
$routes->get('/newTicket', 'NewTicket::index');
$routes->get('/registration', 'Registration::index');
$routes->get('/login', 'Login::index');
$routes->get('/ticketStatus', 'TicketStatus::index');


$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/agentDirectory', 'AgentDirectory::index');
$routes->get('/account', 'Account::index');


$routes->get('/userDirectory', 'UserDirectory::index');
$routes->get('/organizations', 'Organizations::index');


$routes->get('/faqs', 'Faqs::index');
$routes->get('/categories', 'Categories::index');
$routes->get('/cannedResponse', 'CannedResponse::index');


$routes->get('/ticketOpen', 'TicketOpen::index');
$routes->get('/myTicket', 'MyTicket::index');
$routes->get('/ticketClosed', 'TicketClosed::index');
$routes->get('/ticketSearch', 'TicketSearch::index');


$routes->get('/taskOpen', 'TaskOpen::index');
$routes->get('/myTask', 'MyTask::index');
$routes->get('/taskCompleted', 'TaskCompleted::index');
$routes->get('/taskUpdates', 'TaskUpdates::index');
$routes->get('/newTaskModal', 'NewTaskModal::index');

$routes->get('/ticketDashBoard', 'TicketDashBoard::index');
$routes->get('/agentHistory', 'AgentHistory::index');
$routes->get('/notifications', 'Notifications::index');