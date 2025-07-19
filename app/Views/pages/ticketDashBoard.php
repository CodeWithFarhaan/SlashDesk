<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<div class="h-screen overflow-y-auto p-6">
    <div class="mx-auto max-w-7xl space-y-6">
        <!-- Header -->
        <div class="flex items-center justify-between flex-wrap gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Ticket Dashboard</h1>
                <p class="text-gray-600 mt-1">Comprehensive ticket analytics and performance insights</p>
            </div>
            <div class="flex items-center gap-3 flex-wrap">
                <select class="px-3 py-2 border border-gray-300 rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Last Month</option>
                    <option>Last Week</option>
                    <option>Last Quarter</option>
                </select>
                <button class="px-3 py-2 border border-gray-300 rounded-md bg-white text-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center gap-2">
                    <i data-lucide="refresh-cw" class="h-4 w-4"></i>
                    Refresh
                </button>
                <button class="px-3 py-2 border border-gray-300 rounded-md bg-white text-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center gap-2">
                    <i data-lucide="download" class="h-4 w-4"></i>
                    Export
                </button>
            </div>
        </div>

        <!-- Ticket Activity Chart -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center gap-2">
                    <h2 class="text-xl font-semibold text-gray-900">Ticket Activity</h2>
                    <i data-lucide="filter" class="h-4 w-4 text-gray-400"></i>
                </div>
                <p class="text-gray-600 text-sm mt-1">Ticket trends and activity patterns over time</p>
            </div>
            <div class="p-6">
                <!-- Chart Area -->
                <div class="h-96 bg-gray-50 rounded-lg relative overflow-hidden line-chart">
                    <!-- Chart Legend -->
                    <div class="absolute top-4 right-4 bg-white rounded-lg shadow-sm border p-3 space-y-2">
                        <div class="flex items-center gap-2 text-xs">
                            <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                            <span>Assigned</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs">
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <span>Closed</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <span>Overdue</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <span>Created</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs">
                            <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                            <span>Edited</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs">
                            <div class="w-3 h-3 bg-pink-500 rounded-full"></div>
                            <span>Reopened</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs">
                            <div class="w-3 h-3 bg-cyan-500 rounded-full"></div>
                            <span>Referred</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs">
                            <div class="w-3 h-3 bg-lime-500 rounded-full"></div>
                            <span>Transferred</span>
                        </div>
                    </div>
                    
                    <!-- X-axis labels -->
                    <div class="absolute bottom-4 left-0 right-0 flex justify-between px-12 text-xs text-gray-600">
                        <span>May 24</span>
                        <span>May 31</span>
                        <span>Jun 07</span>
                        <span>Jun 14</span>
                        <span>Jun 21</span>
                    </div>
                    
                    <!-- Y-axis labels -->
                    <div class="absolute left-4 top-0 bottom-0 flex flex-col justify-between py-8 text-xs text-gray-600">
                        <span>240</span>
                        <span>180</span>
                        <span>120</span>
                        <span>60</span>
                        <span>0</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Department Statistics -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Department Distribution</h3>
                    <p class="text-gray-600 text-sm mt-1">Tickets by department</p>
                </div>
                <div class="p-6">
                    <div class="pie-chart pie-chart-dept mb-6"></div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                <span>L1 Support</span>
                            </div>
                            <span class="font-medium">960</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span>Presales</span>
                            </div>
                            <span class="font-medium">20</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <span>Onboarding</span>
                            </div>
                            <span class="font-medium">7</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <span>Tech Operation</span>
                            </div>
                            <span class="font-medium">11</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                <span>NOC</span>
                            </div>
                            <span class="font-medium">4</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Topics Statistics -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Topics Distribution</h3>
                    <p class="text-gray-600 text-sm mt-1">Tickets by topic category</p>
                </div>
                <div class="p-6">
                    <div class="pie-chart pie-chart-topics mb-6"></div>
                    <div class="space-y-3 max-h-32 overflow-y-auto">
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-cyan-500 rounded-full"></div>
                                <span class="truncate">Cloud Server Alert</span>
                            </div>
                            <span class="font-medium">908</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <span class="truncate">Technical Support</span>
                            </div>
                            <span class="font-medium">67</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                <span class="truncate">General Inquiry</span>
                            </div>
                            <span class="font-medium">12</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                <span class="truncate">Requirement</span>
                            </div>
                            <span class="font-medium">8</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="truncate">Report a Problem</span>
                            </div>
                            <span class="font-medium">6</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <span class="truncate">Access Issue</span>
                            </div>
                            <span class="font-medium">1</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agent Statistics -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Agent Performance</h3>
                    <p class="text-gray-600 text-sm mt-1">Tickets handled by agent</p>
                </div>
                <div class="p-6">
                    <div class="pie-chart pie-chart-agents mb-6"></div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                <span>Agent A</span>
                            </div>
                            <span class="font-medium">245</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span>Agent B</span>
                            </div>
                            <span class="font-medium">189</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <span>Agent C</span>
                            </div>
                            <span class="font-medium">156</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <span>Agent D</span>
                            </div>
                            <span class="font-medium">134</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                <span>Agent E</span>
                            </div>
                            <span class="font-medium">98</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-cyan-500 rounded-full"></div>
                                <span>Others</span>
                            </div>
                            <span class="font-medium">180</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Tickets</p>
                        <p class="text-2xl font-bold text-gray-900">1,002</p>
                    </div>
                    <div class="h-8 w-8 bg-blue-100 rounded-full flex items-center justify-center">
                        <div class="h-4 w-4 bg-blue-600 rounded-full"></div>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-2">+12% from last month</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Resolved</p>
                        <p class="text-2xl font-bold text-green-600">850</p>
                    </div>
                    <div class="h-8 w-8 bg-green-100 rounded-full flex items-center justify-center">
                        <div class="h-4 w-4 bg-green-600 rounded-full"></div>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-2">84.8% resolution rate</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Pending</p>
                        <p class="text-2xl font-bold text-orange-600">152</p>
                    </div>
                    <div class="h-8 w-8 bg-orange-100 rounded-full flex items-center justify-center">
                        <div class="h-4 w-4 bg-orange-600 rounded-full"></div>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-2">15.2% pending</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Avg Response</p>
                        <p class="text-2xl font-bold text-purple-600">2.4h</p>
                    </div>
                    <div class="h-8 w-8 bg-purple-100 rounded-full flex items-center justify-center">
                        <div class="h-4 w-4 bg-purple-600 rounded-full"></div>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-2">-0.3h from last month</p>
            </div>
        </div>
    </div>
</div>

<script>lucide.createIcons();</script>
<script src="<?= base_url('assets/js/ticketDashBoard.js') ?>"></script>