<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('打刻ページ') }}{{ Auth::user()->name."さんお疲れ様です！" }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button>勤務開始</button><button>勤務終了</button>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <button>休憩開始</button><button>休憩終了</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
