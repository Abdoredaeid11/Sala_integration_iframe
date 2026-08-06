<!-- Settings Page -->
<div x-show="tab==='settings'" style="display:none;">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold mb-2 text-gray-900">Shipping Settings</h2>
        <p class="text-gray-600 mb-8">Configure your shipping integration settings below.</p>

        <!-- Debug Info (remove in production) -->
        <div x-show="false" class="mb-4 p-4 bg-gray-100 rounded text-xs">
            <div>Settings: <span x-text="JSON.stringify(settings)"></span></div>
            <div>Services: <span x-text="apiData.services.length"></span></div>
            <div>Zones: <span x-text="apiData.zones.length"></span></div>
            <div>Subzones: <span x-text="apiData.subzones.length"></span></div>
        </div>

        <!-- Credentials Section -->
        <form @submit.prevent="submitCredentials" class="space-y-6">
            <!-- Credentials -->
            <div class="bg-gray-50 p-6 rounded-lg border">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Authentication Credentials</h3>
                <div class="space-y-5">

                    <div>
                        <label for="token" class="block text-sm font-medium text-gray-700 mb-2">Authentication
                            Token</label>
                        <div class="relative">
                            <input id="token" :type="showPassword ? 'text' : 'password'" x-model="settings.token"
                                @input="onTokenChange()"
                                class="block w-full border border-gray-300 rounded-md shadow-sm py-3 px-4 pr-12 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your shipping system authentication token">
                            <button type="button" @click="showPassword = !showPassword"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                                <svg class="h-5 w-5" :class="showPassword ? 'text-gray-600' : 'text-gray-400'"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path x-show="!showPassword" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path x-show="!showPassword" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                    <path x-show="showPassword" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <p x-show="errors.token" class="text-sm text-red-600 mt-2"
                            x-text="errors.token ? errors.token[0] : ''"></p>
                    </div>
                </div>
            </div>

            <!-- Save Credentials -->
            <div class="pt-6 text-center">
                <button type="submit" :disabled="!settings.token || loading.credentials"
                    class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed shadow-lg transition duration-200">
                    <svg x-show="!loading.credentials" class="w-5 h-5 mr-2" viewbox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <svg x-show="loading.credentials" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span x-text="loading.credentials ? 'Saving...' : 'Save Credentials'"></span>
                </button>
            </div>
        </form>

        <!-- Operation Section -->
        <form x-show="credentialsValidated" @submit.prevent="submitOperation" class="space-y-6 mt-8"
            style="display:none;">
            <!-- Configuration -->
            <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Shipping Configuration</h3>
                <p class="text-sm text-gray-600 mb-6">Configure your shipping operation settings.</p>
                <div class="space-y-5">
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Shipping
                            Service</label>
                        <div class="relative">
                            <select id="service" x-model="settings.service_id" @change="onServiceChange()"
                                :disabled="!settings.provider_id || !settings.token || loading.services"
                                class="block w-full pl-4 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed">
                                <option value="" x-text="loading.services ? 'Loading services...' : 'Select a Service'">
                                </option>
                                <template x-for="service in apiData.services" :key="service.id">
                                    <option :value="service.id" x-text="service.name"></option>
                                </template>
                            </select>
                            <div x-show="loading.services" class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="animate-spin h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p x-show="errors.service_id" class="text-sm text-red-600 mt-2"
                            x-text="errors.service_id ? errors.service_id[0] : ''"></p>
                    </div>
                    <div>
                        <label for="zone" class="block text-sm font-medium text-gray-700 mb-2">From Zone</label>
                        <div class="relative">
                            <select id="zone" x-model="settings.from_zone_id" @change="onZoneChange()"
                                :disabled="!settings.service_id || loading.zones"
                                class="block w-full pl-4 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed">
                                <option value="" x-text="loading.zones ? 'Loading zones...' : 'Select Zone'"></option>
                                <template x-for="zone in apiData.zones" :key="zone.id">
                                    <option :value="zone.id" x-text="zone.name"></option>
                                </template>
                            </select>
                            <div x-show="loading.zones" class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="animate-spin h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p x-show="errors.from_zone_id" class="text-sm text-red-600 mt-2"
                            x-text="errors.from_zone_id ? errors.from_zone_id[0] : ''"></p>
                    </div>
                    <div>
                        <label for="subzone" class="block text-sm font-medium text-gray-700 mb-2">From Subzone</label>
                        <div class="relative">
                            <select id="subzone" x-model="settings.from_subzone_id"
                                :disabled="!settings.from_zone_id || loading.subzones"
                                class="block w-full pl-4 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed">
                                <option value="" x-text="loading.subzones ? 'Loading subzones...' : 'Select Subzone'">
                                </option>
                                <template x-for="subzone in apiData.subzones" :key="subzone.id">
                                    <option :value="subzone.id" x-text="subzone.name"></option>
                                </template>
                            </select>
                            <div x-show="loading.subzones" class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="animate-spin h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p x-show="errors.from_subzone_id" class="text-sm text-red-600 mt-2"
                            x-text="errors.from_subzone_id ? errors.from_subzone_id[0] : ''"></p>
                    </div>
                    <div>
                        <label for="openable_code" class="block text-sm font-medium text-gray-700 mb-2">Package
                            Openable</label>
                        <select id="openable_code" x-model="settings.openable_code"
                            class="block w-full pl-4 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm">
                            <option value="N">No - Sealed packages only</option>
                            <option value="Y">Yes - Allow package inspection</option>
                        </select>
                        <p x-show="errors.openable_code" class="text-sm text-red-600 mt-2"
                            x-text="errors.openable_code ? errors.openable_code[0] : ''"></p>
                    </div>
                </div>
            </div>

            <!-- Save Operation -->
            <div class="pt-6 text-center">
                <button type="submit"
                    :disabled="!settings.service_id || !settings.from_zone_id || !settings.from_subzone_id || loading.operation"
                    class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 disabled:opacity-50 disabled:cursor-not-allowed shadow-lg transition duration-200">
                    <svg x-show="!loading.operation" class="w-5 h-5 mr-2" viewbox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                    <svg x-show="loading.operation" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span x-text="loading.operation ? 'Saving...' : 'Save Operation Settings'"></span>
                </button>
            </div>
        </form>
    </div>


</div>
