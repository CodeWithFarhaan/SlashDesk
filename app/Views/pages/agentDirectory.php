<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<!-- Main Content Wrapper -->
<div class="flex-1 bg-white p-6 overflow-auto">
  <!-- Page Heading -->
  <h1 class="text-md text-gray-500 font-semibold mb-2">Manage your team members and their account permissions here.</h1>

  <!-- Section Header -->
  <div class="flex justify-between items-center mt-6 mb-4">
    <h2 class="text-lg font-semibold">All Users</h2>

    <!-- Filters -->
    <div class="flex items-center space-x-2">
      <input type="text" placeholder="Search..." class="border rounded px-3 py-2 text-sm w-64" />

      <select class="border rounded px-2 py-2 text-sm text-gray-700">
        <option value="0">— All Departments —</option>
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
      <!-- More departments here -->
      </select>

      <button class="bg-gray-200 px-4 py-2 rounded text-sm font-medium hover:bg-gray-300">
        Filter
      </button>

      <button class="bg-black text-white px-4 py-2 rounded text-sm font-medium hover:bg-gray-800">
        + Add User
      </button>
    </div>
  </div>

  <!-- Table Header -->
  <div class="overflow-auto border rounded-lg">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-100 text-gray-900 font-semibold">
        <tr>
          <th class="px-4 py-3">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
          </th>
          <th class="px-6 py-3">Name</th>
          <th class="px-6 py-3">Department</th>
          <th class="px-6 py-3">Email Address</th>
          <th class="px-6 py-3">Phone Number</th>
          <th class="px-6 py-3">Extension</th>
          <th class="px-6 py-3">Mobile Number</th>
        </tr>
      </thead>

      <tbody class="divide-y">
        <tr class="hover:bg-yellow-100 bg-blue-50">
          <td class="px-4 py-4">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
          </td>
          <td class="px-6 py-4">Aamir Chougule</td>
          <td class="px-6 py-4">L1 Support</td>
          <td class="px-6 py-4">aamir@slashrtc.com</td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
        </tr>
      </tbody>

      <tbody class="divide-y">
        <tr class="hover:bg-yellow-100 bg-white-50">
          <td class="px-4 py-4">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
          </td>
          <td class="px-6 py-4">Adnan Shaikh</td>
          <td class="px-6 py-4">L3 Dev Support</td>
          <td class="px-6 py-4">adnan.shaikh@slashrtc.com</td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
        </tr>
      </tbody>

      <tbody class="divide-y">
        <tr class="hover:bg-yellow-100 bg-blue-50">
          <td class="px-4 py-4">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
          </td>
          <td class="px-6 py-4">Anay Kachare</td>
          <td class="px-6 py-4">Customer Deliveries</td>
          <td class="px-6 py-4">anay.kachare@slashrtc.com</td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
          <td class="px-6 py-4"></td>
        </tr>
      </tbody>
    </table>
  </div>


</div>