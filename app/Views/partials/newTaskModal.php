    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SlashDesk :: Staff Control Panel</title>
      <link rel="shortcut icon" href="<?= base_url('/assets/images/foot-logo.svg') ?>" type="image/x-icon">
      <!-- Tailwind CSS -->
      <script src="https://cdn.tailwindcss.com"></script>

      <!-- Custom Tailwind Config -->
      <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                primary: {
                  50: '#eff6ff',
                  500: '#3b82f6',
                  600: '#2563eb',
                  700: '#1d4ed8'
                }
              }
            }
          }
        }
      </script>

      <!-- Font Awesome for icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

      <!-- Flatpickr for date picker -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <link rel="stylesheet" href="<?= base_url('assets/css/newTaskModal.css') ?>">
    </head>

    <body>
      <!-- Task Modal -->
      <div id="taskModal"
      class="navModal modal fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
      <form id="taskForm" action="">
        <div class="relative top-10 mx-auto p-5 border w-11/12 max-w-4xl shadow-lg rounded-lg bg-white">
          <!-- Modal Header -->
          <div class="flex justify-between items-center pb-4 border-b">
            <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
              Create New Task
            </h3>
            <button type="button" class="closeNewModalBtn text-gray-400 hover:text-gray-600 transition-colors">
              <i class="fas fa-times text-xl"></i>
            </button>
          </div>

          <!-- Modal Body -->
          <div class="mt-6 max-h-[70vh] overflow-y-auto">
            <!-- Basic Information -->
            <div class="bg-gradient-to-br from-slate-50 to-blue-50/30 rounded-lg p-6 border-0 shadow-sm">
              <div class="flex items-center gap-2 mb-4">
                <i class="fas fa-file-text text-blue-600"></i>
                <h4 class="text-lg font-semibold text-slate-800">Task Details</h4>
              </div>

              <div class="grid gap-4">
                <div class="space-y-2">
                  <label for="title" class="block text-sm font-medium text-slate-700">
                    Title <span class="text-red-500">*</span>
                  </label>
                  <input type="text" id="title" name="title" required
                  class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-blue-500/20 focus:ring-2 outline-none transition-all"
                  placeholder="Enter task title...">
                  <div class="error-message text-red-500 text-sm hidden"></div>
                </div>

                <div class="space-y-2">
                  <label for="description" class="block text-sm font-medium text-slate-700">
                    Description <span class="text-red-500">*</span>
                  </label>

                  <!-- Rich Text Editor Toolbar -->
                  <div class="border border-slate-200 rounded-lg overflow-hidden">
                    <div class="flex items-center gap-1 p-2 bg-slate-50 border-b border-slate-200 flex-wrap">
                      <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="code">
                        <i class="fas fa-code text-sm"></i>
                      </button>
                      <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="bold">
                        <i class="fas fa-bold text-sm"></i>
                      </button>
                      <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="italic">
                        <i class="fas fa-italic text-sm"></i>
                      </button>
                      <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="underline">
                        <i class="fas fa-underline text-sm"></i>
                      </button>
                      <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded"
                      data-action="strikethrough">
                      <i class="fas fa-strikethrough text-sm"></i>
                    </button>

                    <div class="w-px h-6 bg-slate-300 mx-1"></div>

                    <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded"
                    data-action="insertUnorderedList">
                    <i class="fas fa-list-ul text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded"
                  data-action="insertOrderedList">
                  <i class="fas fa-list-ol text-sm"></i>
                </button>

                <div class="w-px h-6 bg-slate-300 mx-1"></div>

                <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="justifyLeft">
                  <i class="fas fa-align-left text-sm"></i>
                </button>
                <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded"
                data-action="justifyCenter">
                <i class="fas fa-align-center text-sm"></i>
              </button>
              <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="justifyRight">
                <i class="fas fa-align-right text-sm"></i>
              </button>

              <div class="w-px h-6 bg-slate-300 mx-1"></div>

              <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="insertImage">
                <i class="fas fa-image text-sm"></i>
              </button>
              <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="createLink">
                <i class="fas fa-link text-sm"></i>
              </button>
              <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded"
              data-action="insertHorizontalRule">
              <i class="fas fa-minus text-sm"></i>
            </button>
          </div>

          <div id="editor" contenteditable="true" class="min-h-[120px] p-3 focus:outline-none"
          data-placeholder="Details on the reason(s) for creating the task.">
        </div>
        <textarea id="description" name="description" class="hidden" required></textarea>
      </div>
      <div class="error-message text-red-500 text-sm hidden"></div>
    </div>

    <!-- File Upload -->
    <div class="space-y-2">
      <label class="block text-sm font-medium text-slate-700">Attachments</label>
      <div
      class="border-2 border-dashed border-slate-200 rounded-lg p-6 text-center hover:border-blue-300 transition-colors">
      <i class="fas fa-upload text-2xl text-slate-400 mb-2"></i>
      <p class="text-sm text-slate-600 mb-2">Drop files here or click to upload</p>
      <input type="file" id="attachments" name="attachments[]" multiple class="hidden"
      accept=".pdf,.doc,.docx,.txt,.jpg,.jpeg,.png,.gif">
      <button type="button" id="uploadBtn"
      class="px-4 py-2 border border-slate-300 rounded-lg text-sm hover:bg-slate-50 transition-colors">
      Choose Files
    </button>
    </div>
    <div id="fileList" class="flex flex-wrap gap-2 mt-2"></div>
    </div>
    </div>
    </div>

    <!-- Task Configuration -->
    <div class="bg-gradient-to-br from-slate-50 to-green-50/30 rounded-lg p-6 border-0 shadow-sm">
      <div class="flex items-center gap-2 mb-4">
        <i class="fas fa-cog text-green-600"></i>
        <h4 class="text-lg font-semibold text-slate-800">Task Configuration</h4>
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <div class="space-y-2">
          <label class="block text-sm font-medium text-slate-700">Complexity</label>
          <select name="complexity"
          class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-green-500 focus:ring-green-500/20 focus:ring-2 outline-none">
          <option value="">Select complexity</option>
          <option value="high">High</option>
          <option value="low">Low</option>
          <option value="medium">Medium</option>
        </select>
      </div>

      <div class="space-y-2">
        <label class="block text-sm font-medium text-slate-700">
          Tested On <span class="text-red-500">*</span>
        </label>
        <select name="tested_on" required
        class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-green-500 focus:ring-green-500/20 focus:ring-2 outline-none">
        <option value="">Select environment</option>
        <option value="na">NA</option>
        <option value="production">Production</option>
        <option value="uat">UAT</option>
      </select>
      <div class="error-message text-red-500 text-sm hidden"></div>
    </div>

    <div class="space-y-2">
      <label class="block text-sm font-medium text-slate-700">
        Testing Status <span class="text-red-500">*</span>
      </label>
      <select name="testing_status" required
      class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-green-500 focus:ring-green-500/20 focus:ring-2 outline-none">
      <option value="">Select status</option>
      <option value="failed">Failed</option>
      <option value="na">NA</option>
      <option value="pass">Pass</option>
    </select>
    <div class="error-message text-red-500 text-sm hidden"></div>
    </div>

    <div class="space-y-2">
      <label class="block text-sm font-medium text-slate-700">
        Task Type <span class="text-red-500">*</span>
      </label>
      <select name="task_type" required
      class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-green-500 focus:ring-green-500/20 focus:ring-2 outline-none">
      <option value="">Select type</option>
      <option value="263">Activity</option>
      <option value="265">Code Merge</option>
      <option value="262">Code Update</option>
      <option value="266">Customization</option>
      <option value="264">Issue</option>
      <option value="267">NA</option>
      <option value="268">QA Test</option>
      <option value="269">RCA Review</option>
      <option value="284">Server Alerts</option>
    </select>
    <div class="error-message text-red-500 text-sm hidden"></div>
    </div>

    <div class="space-y-2">
      <label class="block text-sm font-medium text-slate-700">
        From Department <span class="text-red-500">*</span>
      </label>
      <select name="from_department" required
      class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-green-500 focus:ring-green-500/20 focus:ring-2 outline-none">
      <option value="">Select department</option>
      <option value="480">Architectural Changes</option>
      <option value="588">Code Merge</option>
      <option value="407">Customer Deliveries</option>
      <option value="403">DevOps</option>
      <option value="405">DevOps - Activity</option>
      <option value="404">DevOps - Code Update</option>
      <option value="487">DevOps Issues</option>
      <option value="493">DevOps VAPT</option>
      <option value="400">L1 Support</option>
      <option value="401">L2 Support</option>
      <option value="402">L3 Dev Support</option>
      <option value="492">MTT Issues</option>
      <option value="413">NOC</option>
      <option value="488">Onboarding</option>
      <option value="410">Presales</option>
      <option value="489">Product Fix</option>
      <option value="406">QA - Testing</option>
      <option value="411">RCA Review</option>
      <option value="408">Resops</option>
      <option value="843">RFC</option>
      <option value="409">Slash IT HelpDesk</option>
      <option value="412">Tech Operation</option>
      <option value="494">Tech VAPT</option>
      <option value="490">Telephony</option>
      <option value="491">VAPT Issues</option>
    </select>
    <div class="error-message text-red-500 text-sm hidden"></div>
    </div>

    <div class="space-y-2">
      <label class="block text-sm font-medium text-slate-700">
        Misrouted <span class="text-red-500">*</span>
      </label>
      <select name="misrouted" required
      class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-green-500 focus:ring-green-500/20 focus:ring-2 outline-none">
      <option value="">Select option</option>
      <option value="614">L1 Support</option>
      <option value="615">L2 Support</option>
      <option value="823">L2-Presales</option>
      <option value="616">L3 Dev Support</option>
      <option value="629">MTT Issue</option>
      <option value="634">MTT QA</option>
      <option value="630">MTT-Phase3</option>
      <option value="622">NA</option>
      <option value="628">New Instance</option>
      <option value="631">NoBroker-MTT</option>
      <option value="617">Onboarding</option>
      <option value="618">Presales</option>
      <option value="627">Product Fix</option>
      <option value="626">Product Issues</option>
      <option value="619">QA-Testing</option>
      <option value="620">RCA Review</option>
      <option value="633">Repetitive issue</option>
      <option value="632">ResOps</option>
      <option value="624">Slash Admin</option>
      <option value="621">Slash IT HelpDesk</option>
      <option value="635">Slash-Product</option>
      <option value="623">Tech Operation</option>
      <option value="636">Tech VAPT</option>
      <option value="625">Telephony</option>
    </select>
    <div class="error-message text-red-500 text-sm hidden"></div>
    </div>
    </div>

    <div class="mt-4 space-y-2">
      <label class="block text-sm font-medium text-slate-700">Information Missing</label>
      <select name="information_missing"
      class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-green-500 focus:ring-green-500/20 focus:ring-2 outline-none">
      <option value="">Select Option</option>
      <option value="no">No</option>
      <option value="yes">Yes</option>
    </select>
    </div>
    </div>

    <!-- Assignment & Visibility -->
    <div class="bg-gradient-to-br from-slate-50 to-purple-50/30 rounded-lg p-6 border-0 shadow-sm">
      <div class="flex items-center gap-2 mb-4">
        <i class="fas fa-users text-purple-600"></i>
        <h4 class="text-lg font-semibold text-slate-800">Assignment & Visibility</h4>
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <div class="space-y-2">
          <label class="block text-sm font-medium text-slate-700">
            Department <span class="text-red-500">*</span>
          </label>
          <select name="department" id="department" required
          class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-purple-500 focus:ring-purple-500/20 focus:ring-2 outline-none">
          <option value="">Select department</option>
          <option value="61">All Feature Test</option>
          <option value="54">Architectural Changes </option>
          <option value="69">Backup Alert</option>
          <option value="62">Branch Merge</option>
          <option value="23">Cloud Server Alerts</option>
          <option value="60">Code Deployment</option>
          <option value="49">Code Merge</option>
          <option value="11">Customer Deliveries</option>
          <option value="70">Daily Priority</option>
          <option value="51">DevOps - Activity</option>
          <option value="50">DevOps - Code Update</option>
          <option value="14">DevOps Internal</option>
          <option value="12">DevOps Issues</option>
          <option value="31">DevOps Jayesh</option>
          <option value="55">DevOps Solution </option>
          <option value="59">DevOps VAPT</option>
          <option value="67">DevOps_Config</option>
          <option value="25">Devops Delivery</option>
          <option value="6">L1 Support</option>
          <option value="7">L2 Support</option>
          <option value="66">L2_Pre-Sales</option>
          <option value="30">L3 Cold Box</option>
          <option value="16">L3 Dev Support</option>
          <option value="17">MTT Issue</option>
          <option value="43">MTT QA</option>
          <option value="63">MTT-Phase3</option>
          <option value="3">Maintenance</option>
          <option value="4">Maintenance / Admin</option>
          <option value="27">Multi Tenancy Module </option>
          <option value="52">NOC</option>
          <option value="72">Nature of Ticket</option>
          <option value="65">New Instance</option>
          <option value="44">NoBroker-MTT</option>
          <option value="41">Noreply</option>
          <option value="46">Onboarding</option>
          <option value="24">Presales</option>
          <option value="26">Product Fix</option>
          <option value="28">Product Issues </option>
          <option value="29">Product-QA </option>
          <option value="19">QA Delivery</option>
          <option value="20">QA-Testing</option>
          <option value="47">RCAs</option>
          <option value="71">RFC</option>
          <option value="33">Repetitive issue</option>
          <option value="53">ResOps</option>
          <option value="2">Sales</option>
          <option value="42">Slash Admin</option>
          <option value="5">Slash IT HelpDesk</option>
          <option value="32">Slash-Product</option>
          <option value="68">Slash_IP-PBX</option>
          <option value="21">Support-To-do-later</option>
          <option value="48">Tech Operation</option>
          <option value="58">Tech VAPT</option>
          <option value="56">Telephony</option>
          <option value="22">To-Do-Later </option>
          <option value="35">UAT-QA</option>
          <option value="1">UAT-Support</option>
          <option value="34">UAT-Tech</option>
          <option value="57">VAPT Issues</option>
        </select>
        <div class="error-message text-red-500 text-sm hidden"></div>
      </div>

      <div class="space-y-2">
        <label class="block text-sm font-medium text-slate-700">Assignee</label>
        <select name="assignee" id="assignee"
        class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-purple-500 focus:ring-purple-500/20 focus:ring-2 outline-none">
        <option value="">Select assignee</option>
        <optgroup label="Agents">
          <option value="s32">Aamir Chougule</option>
          <option value="s124">abhishek purohit</option>
          <option value="s69">Adnan Shaikh</option>
          <option value="s105">Ajay Vadadre</option>
          <option value="s123">akash khedkar</option>
          <option value="s117">akshay redkar</option>
          <option value="s13">Amaan Chhapra</option>
          <option value="s22">Amit Patil</option>
          <option value="s68">Anay Kachare</option>
          <option value="s107">Anupam Yadav</option>
          <option value="s99">Arbaj chaudhary</option>
          <option value="s67">Ashok Solanki</option>
          <option value="s110">atul shukla</option>
          <option value="s120">ayaan sayed</option>
          <option value="s112">ayush nalawade</option>
          <option value="s4">Bilal Shaikh</option>
          <option value="s89">Depesh Bhoir</option>
          <option value="s125">dhananjay dubey</option>
          <option value="s94">Dipesh Ingle</option>
          <option value="s102">Farhaan Chaudhary</option>
          <option value="s103">farhin khan</option>
          <option value="s74">Hamed shaikh</option>
          <option value="s85">hamza shaikh</option>
          <option value="s100">Ibtesam Shaikh</option>
          <option value="s76">Imran Khan</option>
          <option value="s77">Irfan Ansari</option>
          <option value="s115">Irfan Shah</option>
          <option value="s19">Jameel Shaikh</option>
          <option value="s3">Jayesh Nambiar</option>
          <option value="s66">Kanishk Magare</option>
          <option value="s80">Krishna Maurya</option>
          <option value="s113">lakshdip Bandekar</option>
          <option value="s109">Majeet Shaikh</option>
          <option value="s84">Manav Pathak</option>
          <option value="s15">Mohammad Abbas</option>
          <option value="s91">Mohammad Nasim</option>
          <option value="s97">Nikhil Ghadi</option>
          <option value="s72">Nilesh Chaurasiya</option>
          <option value="s54">Pavan Yakulwar</option>
          <option value="s121">pradeep prajapati</option>
          <option value="s104">pratik mandavkar</option>
          <option value="s59">Rahil Hargey</option>
          <option value="s111">rahul panda</option>
          <option value="s98">Rohit Deogharkar</option>
          <option value="s65">Rohit Sorte</option>
          <option value="s87">Sabesh Kannan</option>
          <option value="s101">Sadaan Ansari</option>
          <option value="s20">Saeed Kazi</option>
          <option value="s106">Sahil Chilka</option>
          <option value="s60">Sahil Shaikh</option>
          <option value="s114">sanjana p</option>
          <option value="s12">Sanjana Patil</option>
          <option value="s5">Sarfaraz Shaikh</option>
          <option value="s118">satyanarayan vishwakarma</option>
          <option value="s83">Shahid M</option>
          <option value="s116">shailendra singh</option>
          <option value="s17">Shiraz Ansari</option>
          <option value="s126">shreedhar parab</option>
          <option value="s57">Sudhir Singh</option>
          <option value="s108">tushar arban</option>
          <option value="s6">Uwaiz Syed</option>
          <option value="s122">vikas kumawat</option>
          <option value="s1">Vipul Parab</option>
          <option value="s2">Vivek Yadav</option>
          <option value="s119">Yash Mishra</option>
          <option value="s28">Zoheb Bakshi</option>
        </optgroup>
        <optgroup label="Teams">
          <option value="t2">Enterprices</option>
          <option value="t1">Level I Support</option>
        </optgroup>
      </select>
    </div>
    </div>

    <div class="mt-4 space-y-2">
      <label class="block text-sm font-medium text-slate-700 flex items-center gap-2">
        <i class="fas fa-clock"></i>
        Due Date
      </label>
      <input type="text" id="due_date" name="due_date"
      class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:border-purple-500 focus:ring-purple-500/20 focus:ring-2 outline-none"
      placeholder="Select due date">
    </div>
    </div>

    <div class="border-t pt-4">
      <!-- Action Buttons -->
      <div class="flex justify-between">
        <div class="flex gap-2">
          <button type="reset" id="resetBtn"
          class="px-4 py-2 border border-slate-300 text-slate-600 rounded-lg hover:bg-slate-50 transition-colors">
          Reset
        </button>
        <button type="button"
        class="cancelNewModalBtn px-4 py-2 text-slate-600 hover:bg-slate-50 rounded-lg transition-colors">
        Cancel
      </button>
    </div>
    <button type="submit" id="submitBtn"
    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-2 rounded-lg font-medium transition-all duration-200 shadow-lg hover:shadow-xl">
    <span class="submit-text">Create Task</span>
    <span class="loading-icon hidden">
      <i class="fas fa-spinner fa-spin"></i>
    </span>
    </button>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </body>

    </html>