<!-- Orders Page -->
<div x-show="tab==='orders'" style="display:none;">
    <div class="bg-white p-3 sm:p-4 rounded-xl shadow-lg border border-gray-100 relative">

        {{-- <!-- FILTER -->
        <div class="mb-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <!-- SEARCH -->
                <div class="relative flex-grow">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" x-model="filters.search" @keydown.enter="applyFilters()"
                        placeholder="Search orders by number, customer, or email..."
                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md text-xs leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- FILTER BUTTON -->
                <div class="relative" @click.away="isFilterMenuOpen=false">
                    <button @click="isFilterMenuOpen=!isFilterMenuOpen"
                        class="inline-flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-xs font-medium text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Filters
                        <span x-show="hasActiveFilters()"
                            class="ml-2 inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-blue-100 text-blue-800">
                            <span x-text="activeFiltersCount()"></span>
                        </span>
                    </button>

                    <!-- Dropdown -->
                    <div x-show="isFilterMenuOpen" x-transition
                        class="absolute right-0 z-10 mt-2 w-96 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none p-4"
                        style="display:none;">
                        <div class="space-y-4">
                            <!-- Financial Status -->
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Financial
                                    Status</label>
                                <select x-model="filters.financial_status"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-xs border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 rounded-md">
                                    <option value="">Any</option>
                                    <option value="paid">Paid</option>
                                    <option value="pending">Pending</option>
                                    <option value="refunded">Refunded</option>
                                    <option value="partially_refunded">Partially Refunded</option>
                                </select>
                            </div>

                            <!-- Fulfillment Status -->
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Fulfillment
                                    Status</label>
                                <select x-model="filters.fulfillment_status"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-xs border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 rounded-md">
                                    <option value="">Any</option>
                                    <option value="unfulfilled">Unfulfilled</option>
                                    <option value="partial">Partially Fulfilled</option>
                                    <option value="fulfilled">Fulfilled</option>
                                </select>
                            </div>

                            <!-- Date Range -->
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Date
                                    Range</label>
                                <div class="grid grid-cols-2 gap-2">
                                    <div><input type="date" x-model="filters.date_from"
                                            class="mt-1 block w-full pl-3 pr-3 py-2 text-xs border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 rounded-md">
                                    </div>
                                    <div><input type="date" x-model="filters.date_to"
                                            class="mt-1 block w-full pl-3 pr-3 py-2 text-xs border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 rounded-md">
                                    </div>
                                </div>
                            </div>

                            <!-- Tag Filter -->
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Tag</label>
                                <input type="text" x-model="filters.tagsInput" placeholder="Enter tag (no commas)"
                                    class="mt-1 block w-full pl-3 pr-3 py-2 text-xs border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Actions -->
                            <div class="flex justify-between pt-2">
                                <button @click="clearFilters()"
                                    class="inline-flex items-center px-3 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Clear All</button>
                                <button @click="applyFilters(); isFilterMenuOpen=false;"
                                    class="inline-flex items-center px-4 py-1.5 border border-transparent text-xs font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Apply Filters</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Filters -->
            <div x-show="hasActiveFilters()" class="mt-4 flex flex-wrap gap-2">
                <template x-for="(value, key) in getActiveFilters()" :key="key">
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-blue-100 text-blue-800">
                        <span x-text="formatFilterLabel(key, value)"></span>
                        <button @click="clearFilter(key)"
                            class="ml-1.5 inline-flex items-center justify-center h-4 w-4 rounded-full bg-blue-200 hover:bg-blue-300 focus:outline-none">
                            <svg class="h-2 w-2 text-blue-800" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                <path stroke-linecap="round" stroke-width="1.5"
                                    d="m5.757 4.3-2.535 2.535a1 1 0 0 1-1.415-1.414l2.535-2.535a1 1 0 0 1 1.415 1.414z" />
                                <path stroke-linecap="round" stroke-width="1.5"
                                    d="m2.243 4.3 2.535-2.535a1 1 0 0 1 1.415 1.414l-2.535 2.535a1 1 0 0 1-1.415-1.414z" />
                            </svg>
                        </button>
                    </span>
                </template>
            </div>
        </div>
        <!-- END: FILTER --> --}}

        <div class="flex flex-col sm:flex-row justify-between sm:items-center mb-4 gap-3">
            <h2 class="text-lg font-semibold text-gray-800">Orders</h2>
            <div class="flex items-center gap-2">
                <select x-model="perPage" @change="currentPage = 1; fetchOrders()"
                    class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-xs">
                    <option value="10">10 per page</option>
                    <option value="25">25 per page</option>
                    <option value="50">50 per page</option>
                </select>
                {{-- <button @click="clearAllSelections()" x-show="allSelectedOrders.size > 0"
                    class="w-full sm:w-auto inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-xs font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Clear All
                </button> --}}
                <button @click="sendSelectedOrders()" :disabled="selectedOrders.length === 0"
                    class="w-full sm:w-auto inline-flex justify-center py-2 px-4 border border-transparent shadow-lg text-xs font-medium rounded-md text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 disabled:opacity-50 disabled:cursor-not-allowed disabled:shadow-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                    Send to Shipping (<span x-text="selectedOrders.length"></span>)
                </button>
                <button @click="printSelectedShipments()" :disabled="selectedOrders.length === 0"
                    class="w-full sm:w-auto inline-flex justify-center py-2 px-4 border border-gray-300 shadow text-xs font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 9V5a2 2 0 012-2h8a2 2 0 012 2v4m-2 4h2a1 1 0 011 1v5H5v-5a1 1 0 011-1h2m8 0V9H7v4m9 0H8" />
                    </svg>
                    Print Selected
                </button>
            </div>
        </div>



        <div class="overflow-x-auto">
            <table
                class="min-w-full divide-y divide-gray-200 border border-gray-200 rounded-lg overflow-hidden text-xs">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100 text-[11px]">
                    <tr>
                        <!-- Checkbox header -->
                        <th scope="col" class="px-2 py-3 text-center border-r border-gray-200">
                            <input type="checkbox" @change="toggleSelectAll($event)"
                                :checked="allCurrentPageSelected()"
                                class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                        </th>
                        <!-- Headers (camel‑case) -->
                        <th scope="col"
                            class="px-2 py-2 text-left font-semibold text-gray-700 border-r border-gray-200">Order</th>
                        <th scope="col"
                            class="px-2 py-2 text-left font-semibold text-gray-700 border-r border-gray-200">Shipment
                            Tracking No</th>
                        <th scope="col"
                            class="px-2 py-2 text-left font-semibold text-gray-700 border-r border-gray-200">Status
                        </th>
                        <th scope="col"
                            class="px-2 py-2 text-left font-semibold text-gray-700 border-r border-gray-200">Shipment
                            Status</th>
                        <th scope="col"
                            class="px-2 py-2 text-left font-semibold text-gray-700 border-r border-gray-200">Delivery
                            At
                        </th>
                        <th scope="col"
                            class="px-2 py-2 text-left font-semibold text-gray-700 border-r border-gray-200">COD</th>
                        <th scope="col"
                            class="px-2 py-2 text-left font-semibold text-gray-700 border-r border-gray-200">Creation
                            Date</th>
                        <th scope="col" class="px-2 py-2 text-left font-semibold text-gray-700">Consignee
                        </th>
                        <th scope="col" class="px-2 py-2 text-left font-semibold text-gray-700">Phone No
                        </th>
                        <th scope="col" class="px-2 py-2 text-left font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-[11px]">
                    <!-- No orders -->
                    <template x-if="orders.length===0 && !pageLoading">
                        <tr>
                            <td colspan="12" class="px-6 py-16 text-center text-gray-500 bg-gray-50">
                                <div class="flex flex-col items-center">
                                    <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                    <p class="text-lg font-medium text-gray-600">No orders found</p>
                                    <p class="text-sm text-gray-500 mt-1">Try adjusting your filters or search
                                        criteria.</p>
                                </div>
                            </td>
                        </tr>
                    </template>
                    <!-- Data -->
                    <template x-for="order in orders" :key="order.id">
                        <tr class="hover:bg-blue-50 transition-colors duration-150 border-b border-gray-100">
                            <td class="px-2 py-3 text-center">
                                <input type="checkbox" :value="order.reference_id"
                                    :checked="allSelectedOrders.has(order.reference_id)"
                                    @change="toggleOrderSelection(order.reference_id, $event)"
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                            </td>
                            <td class="px-2 py-3 text-gray-700" x-text="order.reference_id"></td>
                            <td class="px-2 py-3">
                                <template x-if="order.shipment?.tracking"><a :href="order.shipment.tracking"
                                        target="_blank" class="text-blue-600 underline"
                                        x-text="order.shipment.code"></a></template>
                                <template x-else><span class="text-gray-500">-</span></template>
                            </td>
                            <td class="px-2 py-3">
                                <span
                                    class="inline-block text-xs px-2 py-0.5 rounded-full text-white whitespace-nowrap"
                                    :class="getStatusClass(order.status.slug)"
                                    x-text="formatStatusText(order.status.slug) || '-'">
                                </span>
                            </td>
                            <td class="px-2 py-3" :class="getShipmentStatusClass(order.shipment?.status)"><span
                                    x-text="order.shipment?.status || '-'"></span></td>
                            <td class="px-2 py-3"
                                x-text="order.shipment?.deliveredAt ? formatDate(order.shipment.deliveredAt) : '-'">
                            </td>
                            <td class="px-2 py-3" x-text="order.total.amount">
                            </td>
                            <td class="px-2 py-3" x-text="formatDate(order.date.date)">
                            </td>
                            <td class="px-2 py-3" x-text="order.shipment?.consignee || '-'">
                            </td>
                            <td class="px-2 py-3" x-text="order.customer.mobile_code + order.customer.mobile">
                            </td>
                            <td class="px-2 py-3">
                                <template x-if="order.shipment?.id">
                                    <button @click="printShipment([order.shipment.id])"
                                        class="inline-flex items-center px-2 py-1 border border-gray-300 rounded-md text-[11px] text-gray-700 bg-white hover:bg-gray-50">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 9V5a2 2 0 012-2h8a2 2 0 012 2v4m-2 4h2a1 1 0 011 1v5H5v-5a1 1 0 011-1h2m8 0V9H7v4m9 0H8" />
                                        </svg>
                                        Print
                                    </button>
                                </template>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div x-show="orders.length>0" class="mt-3 flex justify-between items-center">
            <div class="flex-1 flex justify-between sm:hidden">
                <button @click="previousPage()" :disabled="!pageInfo.hasPreviousPage || currentPage <= 1"
                    class="relative inline-flex items-center px-3 py-2 border border-gray-300 text-xs font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Previous
                </button>
                <button @click="nextPage()" :disabled="!pageInfo.hasNextPage"
                    class="relative ml-3 inline-flex items-center px-3 py-2 border border-gray-300 text-xs font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Next
                </button>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-xs text-gray-700">Showing page <span class="font-medium"
                            x-text="currentPage"></span>
                    </p>
                </div>
                <div>
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <button @click="previousPage()" :disabled="!pageInfo.hasPreviousPage || currentPage <= 1"
                            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span class="sr-only">Previous</span>
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button aria-current="page"
                            class="relative z-10 inline-flex items-center bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-blue-700 focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"><span
                                x-text="currentPage"></span></button>
                        <button @click="nextPage()" :disabled="!pageInfo.hasNextPage"
                            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 disabled:opacity-50 disabled:cursor-not-allowed"><span
                                class="sr-only">Next</span>
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
