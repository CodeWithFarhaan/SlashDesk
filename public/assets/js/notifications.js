class NotificationManager {
  constructor() {
    this.notifications = []
    this.filteredNotifications = []
    this.activeTab = "all"
    this.searchTerm = ""
    this.currentFilter = ""

    this.init()
    this.loadNotifications()
  }

  init() {
    this.bindEvents()
    this.setupDropdowns()
  }

  bindEvents() {
    // Search functionality
    document.getElementById("search-input").addEventListener("input", (e) => {
      this.searchTerm = e.target.value.toLowerCase()
      this.filterNotifications()
    })

    // Tab switching
    document.querySelectorAll(".tab-button").forEach((button) => {
      button.addEventListener("click", (e) => {
        this.switchTab(e.target.dataset.tab)
      })
    })

    // Mark all as read
    document.getElementById("mark-all-read").addEventListener("click", () => {
      this.markAllAsRead()
    })

    // Filter dropdown
    document.getElementById("filter-dropdown").addEventListener("click", () => {
      this.toggleFilterDropdown()
    })

    // Filter options
    document.querySelectorAll(".filter-option").forEach((option) => {
      option.addEventListener("click", (e) => {
        e.preventDefault()
        this.currentFilter = e.target.dataset.filter
        this.filterNotifications()
        this.toggleFilterDropdown()
      })
    })

    // Modal events
    document.getElementById("modal-cancel").addEventListener("click", () => {
      this.hideModal()
    })

    document.getElementById("modal-confirm").addEventListener("click", () => {
      this.confirmAction()
    })

    // Close dropdown when clicking outside
    document.addEventListener("click", (e) => {
      if (!e.target.closest("#filter-dropdown") && !e.target.closest("#filter-menu")) {
        document.getElementById("filter-menu").classList.add("hidden")
      }
    })
  }

  setupDropdowns() {
    // Setup notification action dropdowns
    document.addEventListener("click", (e) => {
      if (e.target.closest(".notification-menu-trigger")) {
        const notificationId = e.target.closest(".notification-item").dataset.id
        this.toggleNotificationMenu(notificationId)
      }
    })
  }

  loadNotifications() {
    // Mock data - replace with actual API call
    this.notifications = [
      {
        id: "1",
        type: "new_ticket",
        title: "New High Priority Ticket",
        message: "Server outage reported - requires immediate attention",
        timestamp: "2 minutes ago",
        isRead: false,
        ticketId: "TK-2024-001",
        priority: "high",
        customerName: "John Smith",
      },
      {
        id: "2",
        type: "assignment",
        title: "Ticket Assigned to You",
        message: "Email delivery issues - ticket has been assigned to your queue",
        timestamp: "15 minutes ago",
        isRead: false,
        ticketId: "TK-2024-002",
        priority: "medium",
        customerName: "Sarah Johnson",
      },
      {
        id: "3",
        type: "comment",
        title: "New Comment Added",
        message: "Customer provided additional information about the login issue",
        timestamp: "1 hour ago",
        isRead: true,
        ticketId: "TK-2024-003",
        priority: "low",
        customerName: "Mike Davis",
        agentName: "Sarah Johnson",
      },
      {
        id: "4",
        type: "escalation",
        title: "Ticket Escalated",
        message: "Database connection timeout - escalated to Level 2 support",
        timestamp: "2 hours ago",
        isRead: false,
        ticketId: "TK-2024-004",
        priority: "urgent",
        customerName: "Emily Chen",
      },
      {
        id: "5",
        type: "resolved",
        title: "Ticket Resolved",
        message: "Password reset issue has been successfully resolved",
        timestamp: "3 hours ago",
        isRead: true,
        ticketId: "TK-2024-005",
        priority: "low",
        customerName: "Robert Wilson",
      },
    ]

    this.filterNotifications()
  }

  filterNotifications() {
    this.filteredNotifications = this.notifications.filter((notification) => {
      // Search filter
      const matchesSearch =
        !this.searchTerm ||
        notification.title.toLowerCase().includes(this.searchTerm) ||
        notification.message.toLowerCase().includes(this.searchTerm) ||
        (notification.ticketId && notification.ticketId.toLowerCase().includes(this.searchTerm))

      // Tab filter
      const matchesTab =
        this.activeTab === "all" ||
        (this.activeTab === "unread" && !notification.isRead) ||
        (this.activeTab === "urgent" && notification.priority === "urgent") ||
        this.activeTab === notification.type

      // Additional filter
      const matchesFilter =
        !this.currentFilter ||
        (this.currentFilter === "urgent" && notification.priority === "urgent") ||
        this.currentFilter === notification.type

      return matchesSearch && matchesTab && matchesFilter
    })

    this.renderNotifications()
    this.updateCounts()
  }

  renderNotifications() {
    const container = document.getElementById("notifications-container")
    const emptyState = document.getElementById("empty-state")

    if (this.filteredNotifications.length === 0) {
      container.innerHTML = ""
      emptyState.classList.remove("hidden")
      return
    }

    emptyState.classList.add("hidden")
    container.innerHTML = this.filteredNotifications
      .map((notification) => this.renderNotificationItem(notification))
      .join("")

    // Bind events for rendered notifications
    this.bindNotificationEvents()
  }

  renderNotificationItem(notification) {
    const unreadClass = !notification.isRead ? "notification-unread" : ""
    const icon = this.getNotificationIcon(notification.type)
    const priorityBadge = notification.priority
      ? `<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium border priority-${notification.priority}">
                ${notification.priority.toUpperCase()}
            </span>`
      : ""

    return `
            <div class="notification-item p-6 hover:bg-gray-50 transition-colors ${unreadClass}" data-id="${notification.id}">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 mt-1">
                        ${icon}
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-1">
                                    <h3 class="text-sm font-semibold ${!notification.isRead ? "text-gray-900" : "text-gray-700"}">
                                        ${notification.title}
                                    </h3>
                                    ${!notification.isRead ? '<div class="w-2 h-2 bg-blue-500 rounded-full"></div>' : ""}
                                </div>
                                <p class="text-sm text-gray-600 mb-3 leading-relaxed">${notification.message}</p>
                                <div class="flex items-center space-x-3 text-xs text-gray-500 mb-3">
                                    <span>${notification.timestamp}</span>
                                    ${notification.ticketId ? `<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">${notification.ticketId}</span>` : ""}
                                    ${priorityBadge}
                                    ${notification.customerName ? `<span>Customer: ${notification.customerName}</span>` : ""}
                                    ${notification.agentName ? `<span>Agent: ${notification.agentName}</span>` : ""}
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="view-ticket-btn inline-flex items-center px-3 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50" data-ticket="${notification.ticketId}">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        View Ticket
                                    </button>
                                    ${
                                      !notification.isRead
                                        ? `
                                        <button class="mark-read-btn inline-flex items-center px-3 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50" data-id="${notification.id}">
                                            Mark as Read
                                        </button>
                                    `
                                        : ""
                                    }
                                    ${this.getActionButton(notification)}
                                </div>
                            </div>
                            <div class="relative">
                                <button class="notification-menu-trigger p-1 rounded-full hover:bg-gray-200" data-id="${notification.id}">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                                <div class="notification-menu hidden absolute right-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" data-id="${notification.id}">
                                    <div class="py-1">
                                        ${!notification.isRead ? `<a href="#" class="mark-read-action block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-id="${notification.id}">Mark as Read</a>` : ""}
                                        <a href="#" class="archive-action block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-id="${notification.id}">Archive</a>
                                        <a href="#" class="delete-action block px-4 py-2 text-sm text-red-600 hover:bg-gray-100" data-id="${notification.id}">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `
  }

  getNotificationIcon(type) {
    const icons = {
      new_ticket:
        '<svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>',
      ticket_update:
        '<svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
      assignment:
        '<svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>',
      comment:
        '<svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>',
      escalation:
        '<svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>',
      resolved:
        '<svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
    }
    return icons[type] || icons["new_ticket"]
  }

  getActionButton(notification) {
    switch (notification.type) {
      case "assignment":
        return `<button class="accept-assignment-btn inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded text-white bg-green-600 hover:bg-green-700" data-id="${notification.id}">Accept Assignment</button>`
      case "escalation":
        return `<button class="handle-escalation-btn inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded text-white bg-red-600 hover:bg-red-700" data-id="${notification.id}">Handle Escalation</button>`
      default:
        return ""
    }
  }

  bindNotificationEvents() {
    // View ticket buttons
    document.querySelectorAll(".view-ticket-btn").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        const ticketId = e.target.dataset.ticket
        this.viewTicket(ticketId)
      })
    })

    // Mark as read buttons
    document.querySelectorAll(".mark-read-btn").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        const notificationId = e.target.dataset.id
        this.markAsRead(notificationId)
      })
    })

    // Action buttons
    document.querySelectorAll(".accept-assignment-btn").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        const notificationId = e.target.dataset.id
        this.acceptAssignment(notificationId)
      })
    })

    document.querySelectorAll(".handle-escalation-btn").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        const notificationId = e.target.dataset.id
        this.handleEscalation(notificationId)
      })
    })

    // Menu actions
    document.querySelectorAll(".mark-read-action").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault()
        const notificationId = e.target.dataset.id
        this.markAsRead(notificationId)
      })
    })

    document.querySelectorAll(".archive-action").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault()
        const notificationId = e.target.dataset.id
        this.archiveNotification(notificationId)
      })
    })

    document.querySelectorAll(".delete-action").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault()
        const notificationId = e.target.dataset.id
        this.deleteNotification(notificationId)
      })
    })
  }

  switchTab(tab) {
    // Update active tab
    document.querySelectorAll(".tab-button").forEach((btn) => {
      btn.classList.remove("active")
    })
    document.querySelector(`[data-tab="${tab}"]`).classList.add("active")

    this.activeTab = tab
    this.filterNotifications()
  }

  toggleFilterDropdown() {
    const menu = document.getElementById("filter-menu")
    menu.classList.toggle("hidden")
  }

  toggleNotificationMenu(notificationId) {
    // Close all other menus
    document.querySelectorAll(".notification-menu").forEach((menu) => {
      if (menu.dataset.id !== notificationId) {
        menu.classList.add("hidden")
      }
    })

    // Toggle current menu
    const menu = document.querySelector(`.notification-menu[data-id="${notificationId}"]`)
    menu.classList.toggle("hidden")
  }

  updateCounts() {
    const unreadCount = this.notifications.filter((n) => !n.isRead).length
    const totalCount = this.filteredNotifications.length

    document.getElementById("unread-count").textContent = unreadCount
    document.getElementById("notification-count").textContent = `${totalCount} notifications`

    // Show/hide mark all read button
    const markAllBtn = document.getElementById("mark-all-read")
    if (unreadCount > 0) {
      markAllBtn.classList.remove("hidden")
    } else {
      markAllBtn.classList.add("hidden")
    }
  }

  markAsRead(notificationId) {
    const notification = this.notifications.find((n) => n.id === notificationId)
    if (notification) {
      notification.isRead = true
      this.filterNotifications()

      // API call would go here
      // this.apiCall('mark_read', { id: notificationId });
    }
  }

  markAllAsRead() {
    this.notifications.forEach((notification) => {
      notification.isRead = true
    })
    this.filterNotifications()

    // API call would go here
    // this.apiCall('mark_all_read');
  }

  viewTicket(ticketId) {
    // Redirect to ticket view or open modal
    window.location.href = `/tickets/view/${ticketId}`
  }

  acceptAssignment(notificationId) {
    this.showModal("Accept Assignment", "Are you sure you want to accept this ticket assignment?", () => {
      // Handle assignment acceptance
      this.markAsRead(notificationId)
      // API call would go here
    })
  }

  handleEscalation(notificationId) {
    this.showModal(
      "Handle Escalation",
      "This ticket requires immediate attention. Proceed to handle escalation?",
      () => {
        // Handle escalation
        this.markAsRead(notificationId)
        // API call would go here
      },
    )
  }

  archiveNotification(notificationId) {
    this.notifications = this.notifications.filter((n) => n.id !== notificationId)
    this.filterNotifications()

    // API call would go here
    // this.apiCall('archive', { id: notificationId });
  }

  deleteNotification(notificationId) {
    this.showModal(
      "Delete Notification",
      "Are you sure you want to delete this notification? This action cannot be undone.",
      () => {
        this.notifications = this.notifications.filter((n) => n.id !== notificationId)
        this.filterNotifications()

        // API call would go here
        // this.apiCall('delete', { id: notificationId });
      },
    )
  }

  showModal(title, message, confirmCallback) {
    document.getElementById("modal-title").textContent = title
    document.getElementById("modal-message").textContent = message
    document.getElementById("action-modal").classList.remove("hidden")

    this.pendingAction = confirmCallback
  }

  hideModal() {
    document.getElementById("action-modal").classList.add("hidden")
    this.pendingAction = null
  }

  confirmAction() {
    if (this.pendingAction) {
      this.pendingAction()
      this.hideModal()
    }
  }

  // API call method (to be implemented with actual endpoints)
  apiCall(action, data = {}) {
    // Example API call structure
    /*
        fetch(`/api/notifications/${action}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                // Handle success
            } else {
                // Handle error
                console.error('API Error:', result.message);
            }
        })
        .catch(error => {
            console.error('Network Error:', error);
        });
        */
  }
}

// Initialize when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  new NotificationManager()
})
