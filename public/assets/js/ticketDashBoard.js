// Department Metrics Dashboard JavaScript

class DeptMetricsDashboard {
    constructor() {
        this.initializeCharts();
        this.bindEvents();
        this.loadData();
    }

    // Sample data - replace with actual API calls
    sampleData = {
        activityData: [
            { date: "May 24", assigned: 180, closed: 120, overdue: 45, created: 85, edited: 30, reopened: 15, referred: 25, transferred: 10 },
            { date: "May 31", assigned: 220, closed: 150, overdue: 35, created: 95, edited: 40, reopened: 20, referred: 30, transferred: 15 },
            { date: "Jun 07", assigned: 190, closed: 140, overdue: 50, created: 75, edited: 25, reopened: 10, referred: 35, transferred: 20 },
            { date: "Jun 14", assigned: 240, closed: 180, overdue: 40, created: 110, edited: 45, reopened: 25, referred: 20, transferred: 12 },
            { date: "Jun 21", assigned: 200, closed: 160, overdue: 55, created: 90, edited: 35, reopened: 18, referred: 40, transferred: 18 }
        ],
        departmentData: [
            { name: "L1 Support", value: 960, color: "#3b82f6" },
            { name: "Presales", value: 20, color: "#10b981" },
            { name: "Onboarding", value: 7, color: "#f59e0b" },
            { name: "Tech Operation", value: 11, color: "#ef4444" },
            { name: "NOC", value: 4, color: "#8b5cf6" }
        ],
        topicsData: [
            { name: "Cloud Server Alert", value: 908, color: "#06b6d4" },
            { name: "Technical Support", value: 67, color: "#ef4444" },
            { name: "General Inquiry", value: 12, color: "#3b82f6" },
            { name: "Requirement", value: 8, color: "#8b5cf6" },
            { name: "Report a Problem", value: 6, color: "#10b981" },
            { name: "Access Issue", value: 1, color: "#f59e0b" }
        ],
        agentData: [
            { name: "Agent A", value: 245, color: "#3b82f6" },
            { name: "Agent B", value: 189, color: "#10b981" },
            { name: "Agent C", value: 156, color: "#f59e0b" },
            { name: "Agent D", value: 134, color: "#ef4444" },
            { name: "Agent E", value: 98, color: "#8b5cf6" },
            { name: "Others", value: 180, color: "#06b6d4" }
        ]
    };

    // Initialize charts
    initializeCharts() {
        this.createLineChart();
        this.createPieCharts();
        this.updateSummaryCards();
    }

    // Create interactive line chart
    createLineChart() {
        const chartContainer = document.querySelector('.line-chart');
        if (!chartContainer) return;

        // Clear existing content
        chartContainer.innerHTML = '';

        // Create SVG
        const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.setAttribute('width', '100%');
        svg.setAttribute('height', '100%');
        svg.setAttribute('viewBox', '0 0 800 400');
        svg.classList.add('absolute', 'inset-0');

        // Chart configuration
        const margin = { top: 20, right: 80, bottom: 40, left: 60 };
        const width = 800 - margin.left - margin.right;
        const height = 400 - margin.top - margin.bottom;

        // Create grid lines
        this.createGridLines(svg, width, height, margin);

        // Create lines for each metric
        const metrics = ['assigned', 'closed', 'overdue', 'created', 'edited', 'reopened', 'referred', 'transferred'];
        const colors = ['#3b82f6', '#10b981', '#ef4444', '#f59e0b', '#8b5cf6', '#ec4899', '#06b6d4', '#84cc16'];

        metrics.forEach((metric, index) => {
            this.createLine(svg, metric, colors[index], width, height, margin);
        });

        // Add axes
        this.createAxes(svg, width, height, margin);

        // Add legend
        this.createLegend(svg, metrics, colors);

        chartContainer.appendChild(svg);

        // Add interactivity
        this.addChartInteractivity(svg);
    }

    // Create grid lines
    createGridLines(svg, width, height, margin) {
        const gridGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        gridGroup.setAttribute('transform', `translate(${margin.left}, ${margin.top})`);

        // Horizontal grid lines
        for (let i = 0; i <= 5; i++) {
            const y = (height / 5) * i;
            const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            line.setAttribute('x1', 0);
            line.setAttribute('y1', y);
            line.setAttribute('x2', width);
            line.setAttribute('y2', y);
            line.setAttribute('stroke', '#f0f0f0');
            line.setAttribute('stroke-dasharray', '3,3');
            gridGroup.appendChild(line);
        }

        // Vertical grid lines
        for (let i = 0; i <= 4; i++) {
            const x = (width / 4) * i;
            const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            line.setAttribute('x1', x);
            line.setAttribute('y1', 0);
            line.setAttribute('x2', x);
            line.setAttribute('y2', height);
            line.setAttribute('stroke', '#f0f0f0');
            line.setAttribute('stroke-dasharray', '3,3');
            gridGroup.appendChild(line);
        }

        svg.appendChild(gridGroup);
    }

    // Create line for specific metric
    createLine(svg, metric, color, width, height, margin) {
        const lineGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        lineGroup.setAttribute('transform', `translate(${margin.left}, ${margin.top})`);

        const maxValue = 250; // Maximum value for scaling
        const points = this.sampleData.activityData.map((d, i) => {
            const x = (width / (this.sampleData.activityData.length - 1)) * i;
            const y = height - (d[metric] / maxValue) * height;
            return `${x},${y}`;
        }).join(' ');

        // Create polyline
        const polyline = document.createElementNS('http://www.w3.org/2000/svg', 'polyline');
        polyline.setAttribute('points', points);
        polyline.setAttribute('fill', 'none');
        polyline.setAttribute('stroke', color);
        polyline.setAttribute('stroke-width', '2');
        polyline.classList.add('line-' + metric);

        // Add dots
        this.sampleData.activityData.forEach((d, i) => {
            const x = (width / (this.sampleData.activityData.length - 1)) * i;
            const y = height - (d[metric] / maxValue) * height;
            
            const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
            circle.setAttribute('cx', x);
            circle.setAttribute('cy', y);
            circle.setAttribute('r', 4);
            circle.setAttribute('fill', color);
            circle.classList.add('dot-' + metric);
            circle.setAttribute('data-value', d[metric]);
            circle.setAttribute('data-date', d.date);
            circle.setAttribute('data-metric', metric);

            lineGroup.appendChild(circle);
        });

        lineGroup.appendChild(polyline);
        svg.appendChild(lineGroup);
    }

    // Create axes
    createAxes(svg, width, height, margin) {
        // X-axis
        const xAxisGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        xAxisGroup.setAttribute('transform', `translate(${margin.left}, ${margin.top + height})`);

        this.sampleData.activityData.forEach((d, i) => {
            const x = (width / (this.sampleData.activityData.length - 1)) * i;
            const text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            text.setAttribute('x', x);
            text.setAttribute('y', 20);
            text.setAttribute('text-anchor', 'middle');
            text.setAttribute('font-size', '12');
            text.setAttribute('fill', '#666');
            text.textContent = d.date;
            xAxisGroup.appendChild(text);
        });

        // Y-axis
        const yAxisGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        yAxisGroup.setAttribute('transform', `translate(${margin.left - 10}, ${margin.top})`);

        for (let i = 0; i <= 5; i++) {
            const y = (height / 5) * i;
            const value = 250 - (250 / 5) * i;
            const text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            text.setAttribute('x', 0);
            text.setAttribute('y', y + 4);
            text.setAttribute('text-anchor', 'end');
            text.setAttribute('font-size', '12');
            text.setAttribute('fill', '#666');
            text.textContent = Math.round(value);
            yAxisGroup.appendChild(text);
        }

        svg.appendChild(xAxisGroup);
        svg.appendChild(yAxisGroup);
    }

    // Create legend
    createLegend(svg, metrics, colors) {
        const legendGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        legendGroup.setAttribute('transform', 'translate(650, 30)');

        const legendData = [
            { name: 'Assigned', color: colors[0] },
            { name: 'Closed', color: colors[1] },
            { name: 'Overdue', color: colors[2] },
            { name: 'Created', color: colors[3] },
            { name: 'Edited', color: colors[4] },
            { name: 'Reopened', color: colors[5] },
            { name: 'Referred', color: colors[6] },
            { name: 'Transferred', color: colors[7] }
        ];

        legendData.forEach((item, i) => {
            const y = i * 20;
            
            // Color indicator
            const rect = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
            rect.setAttribute('x', 0);
            rect.setAttribute('y', y);
            rect.setAttribute('width', 12);
            rect.setAttribute('height', 12);
            rect.setAttribute('fill', item.color);
            rect.setAttribute('rx', 6);

            // Label
            const text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            text.setAttribute('x', 18);
            text.setAttribute('y', y + 9);
            text.setAttribute('font-size', '11');
            text.setAttribute('fill', '#374151');
            text.textContent = item.name;

            legendGroup.appendChild(rect);
            legendGroup.appendChild(text);
        });

        svg.appendChild(legendGroup);
    }

    // Add chart interactivity
    addChartInteractivity(svg) {
        const tooltip = this.createTooltip();
        
        svg.querySelectorAll('circle').forEach(circle => {
            circle.addEventListener('mouseenter', (e) => {
                const metric = e.target.getAttribute('data-metric');
                const value = e.target.getAttribute('data-value');
                const date = e.target.getAttribute('data-date');
                
                tooltip.innerHTML = `
                    <div class="font-medium">${metric.charAt(0).toUpperCase() + metric.slice(1)}</div>
                    <div class="text-sm text-gray-600">${date}: ${value}</div>
                `;
                tooltip.style.display = 'block';
                
                // Scale up the circle
                e.target.setAttribute('r', 6);
            });

            circle.addEventListener('mousemove', (e) => {
                tooltip.style.left = e.pageX + 10 + 'px';
                tooltip.style.top = e.pageY - 10 + 'px';
            });

            circle.addEventListener('mouseleave', (e) => {
                tooltip.style.display = 'none';
                e.target.setAttribute('r', 4);
            });
        });
    }

    // Create tooltip
    createTooltip() {
        let tooltip = document.getElementById('chart-tooltip');
        if (!tooltip) {
            tooltip = document.createElement('div');
            tooltip.id = 'chart-tooltip';
            tooltip.className = 'absolute bg-white p-3 border rounded-lg shadow-lg z-50 pointer-events-none';
            tooltip.style.display = 'none';
            document.body.appendChild(tooltip);
        }
        return tooltip;
    }

    // Create pie charts
    createPieCharts() {
        this.createPieChart('dept', this.sampleData.departmentData);
        this.createPieChart('topics', this.sampleData.topicsData);
        this.createPieChart('agents', this.sampleData.agentData);
    }

    // Create individual pie chart
    createPieChart(type, data) {
        const container = document.querySelector(`.pie-chart-${type}`);
        if (!container) return;

        const total = data.reduce((sum, item) => sum + item.value, 0);
        let currentAngle = 0;

        // Calculate percentages and create conic gradient
        const gradientStops = data.map(item => {
            const percentage = (item.value / total) * 360;
            const startAngle = currentAngle;
            const endAngle = currentAngle + percentage;
            currentAngle = endAngle;
            
            return `${item.color} ${startAngle}deg ${endAngle}deg`;
        });

        container.style.background = `conic-gradient(${gradientStops.join(', ')})`;

        // Add hover effects
        container.addEventListener('mouseenter', () => {
            container.style.transform = 'scale(1.05)';
            container.style.transition = 'transform 0.2s ease';
        });

        container.addEventListener('mouseleave', () => {
            container.style.transform = 'scale(1)';
        });

        // Add click handler for detailed view
        container.addEventListener('click', () => {
            this.showDetailedView(type, data);
        });
    }

    // Show detailed view modal
    showDetailedView(type, data) {
        const modal = this.createModal();
        const total = data.reduce((sum, item) => sum + item.value, 0);
        
        modal.innerHTML = `
            <div class="bg-white rounded-lg p-6 max-w-md w-full mx-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">${type.charAt(0).toUpperCase() + type.slice(1)} Details</h3>
                    <button class="close-modal text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="space-y-3">
                    ${data.map(item => `
                        <div class="flex items-center justify-between p-2 rounded hover:bg-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="w-4 h-4 rounded-full" style="background-color: ${item.color}"></div>
                                <span class="font-medium">${item.name}</span>
                            </div>
                            <div class="text-right">
                                <div class="font-semibold">${item.value}</div>
                                <div class="text-xs text-gray-500">${((item.value / total) * 100).toFixed(1)}%</div>
                            </div>
                        </div>
                    `).join('')}
                </div>
                <div class="mt-4 pt-4 border-t">
                    <div class="flex justify-between font-semibold">
                        <span>Total:</span>
                        <span>${total}</span>
                    </div>
                </div>
            </div>
        `;

        modal.style.display = 'flex';
        
        // Close modal handlers
        modal.querySelector('.close-modal').addEventListener('click', () => {
            modal.style.display = 'none';
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    }

    // Create modal
    createModal() {
        let modal = document.getElementById('detail-modal');
        if (!modal) {
            modal = document.createElement('div');
            modal.id = 'detail-modal';
            modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
            modal.style.display = 'none';
            document.body.appendChild(modal);
        }
        return modal;
    }

    // Update summary cards
    updateSummaryCards() {
        const summaryData = this.calculateSummaryData();
        
        // Update cards with animation
        Object.keys(summaryData).forEach(key => {
            const element = document.querySelector(`[data-summary="${key}"]`);
            if (element) {
                this.animateNumber(element, summaryData[key]);
            }
        });
    }

    // Calculate summary data
    calculateSummaryData() {
        const totalTickets = this.sampleData.departmentData.reduce((sum, dept) => sum + dept.value, 0);
        const resolved = Math.floor(totalTickets * 0.848);
        const pending = totalTickets - resolved;
        
        return {
            total: totalTickets,
            resolved: resolved,
            pending: pending,
            avgResponse: '2.4h'
        };
    }

    // Animate number counting
    animateNumber(element, targetValue) {
        const startValue = 0;
        const duration = 1000;
        const startTime = performance.now();
        
        const animate = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            const currentValue = Math.floor(startValue + (targetValue - startValue) * progress);
            element.textContent = typeof targetValue === 'string' ? targetValue : currentValue.toLocaleString();
            
            if (progress < 1) {
                requestAnimationFrame(animate);
            }
        };
        
        requestAnimationFrame(animate);
    }

    // Bind events
    bindEvents() {
        // Refresh button
        const refreshBtn = document.querySelector('[data-action="refresh"]');
        if (refreshBtn) {
            refreshBtn.addEventListener('click', () => {
                this.refreshData();
            });
        }

        // Export button
        const exportBtn = document.querySelector('[data-action="export"]');
        if (exportBtn) {
            exportBtn.addEventListener('click', () => {
                this.exportData();
            });
        }

        // Time period selector
        const timeSelector = document.querySelector('[data-control="time-period"]');
        if (timeSelector) {
            timeSelector.addEventListener('change', (e) => {
                this.loadDataForPeriod(e.target.value);
            });
        }

        // Auto-refresh every 5 minutes
        setInterval(() => {
            this.refreshData();
        }, 300000);
    }

    // Load data (replace with actual API calls)
    loadData() {
        // Simulate API call
        setTimeout(() => {
            this.initializeCharts();
        }, 100);
    }

    // Refresh data
    refreshData() {
        // Show loading state
        this.showLoadingState();
        
        // Simulate API call
        setTimeout(() => {
            // Update with new data (in real app, fetch from API)
            this.initializeCharts();
            this.hideLoadingState();
            this.showNotification('Data refreshed successfully', 'success');
        }, 1000);
    }

    // Export data
    exportData() {
        const data = {
            activity: this.sampleData.activityData,
            departments: this.sampleData.departmentData,
            topics: this.sampleData.topicsData,
            agents: this.sampleData.agentData,
            exportDate: new Date().toISOString()
        };

        const blob = new Blob([JSON.stringify(data, null, 2)], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `dept-metrics-${new Date().toISOString().split('T')[0]}.json`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);

        this.showNotification('Data exported successfully', 'success');
    }

    // Load data for specific period
    loadDataForPeriod(period) {
        this.showLoadingState();
        
        // Simulate API call with different data based on period
        setTimeout(() => {
            // In real app, modify API endpoint based on period
            this.initializeCharts();
            this.hideLoadingState();
        }, 500);
    }

    // Show loading state
    showLoadingState() {
        const loader = document.createElement('div');
        loader.id = 'dashboard-loader';
        loader.className = 'fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center z-50';
        loader.innerHTML = `
            <div class="flex items-center space-x-2">
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
                <span class="text-gray-600">Loading...</span>
            </div>
        `;
        document.body.appendChild(loader);
    }

    // Hide loading state
    hideLoadingState() {
        const loader = document.getElementById('dashboard-loader');
        if (loader) {
            loader.remove();
        }
    }

    // Show notification
    showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
            type === 'success' ? 'bg-green-100 text-green-800 border border-green-200' :
            type === 'error' ? 'bg-red-100 text-red-800 border border-red-200' :
            'bg-blue-100 text-blue-800 border border-blue-200'
        }`;
        notification.textContent = message;

        document.body.appendChild(notification);

        // Auto remove after 3 seconds
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
}

// Initialize dashboard when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new DeptMetricsDashboard();
});

// Export for use in other modules
if (typeof module !== 'undefined' && module.exports) {
    module.exports = DeptMetricsDashboard;
}