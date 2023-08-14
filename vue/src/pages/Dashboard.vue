<template>
    <div class="flex justify-center p-8">
        <div class="w-2/3 flex flex-col gap-16">
            <div>
                <div class="w-1/3 flex flex-col gap-2 m-auto">
                    <label class="text-gray-900">Nhập Mã Đơn Hàng Của Bạn: </label>
                    <input type="text"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-300 sm:text-sm sm:leading-6">
                </div>

            </div>
            <tableOrder />
            
        </div>
    </div>
</template>

<script setup>
import tableOrder from '../components/table/tableOrder.vue';

</script>