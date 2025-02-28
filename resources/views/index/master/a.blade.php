@extends('master')

@section('container')
    <div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                <div class="m-2">
                    <div class="example-controls-container">
                        <div class="controls">
                            <input id="search_field"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 ps-10 p-2.5  dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                type="search" placeholder="Search...">

                            <button id="export-file"
                                class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 mt-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Download
                                CSV</button>
                        </div>
                    </div>

                    <div id="table" class="ht-theme-main-dark-auto"></div>
                </div>

                <div class="m-2">
                    <div class="example-controls-container">
                        <div class="controls">
                            <input id="search_field_2"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 ps-10 p-2.5 mb-2 mt-2  dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                type="search" placeholder="Search...">
                        </div>
                    </div>
                    <div id="table-2" class="ht-theme-main-dark-auto"></div>
                </div>



            </div>
        </div>
    </div>

    <script>
        const container = document.querySelector('#table');

        const hot = new Handsontable(container, {
            data: [
                ['nngdm', 'blavla@gmail.com', 34, '27 Januari 2024', 'lihat'],
                ['vespinef', 'vespin@hmail.com', 11, '8 Februari 2021', 'lihat'],
                ['arga', 'argagaming98@gmail.com', 16, '5 Desember 2023', 'lihat'],
            ],
            rowHeaders: true,
            nestedHeaders: [
                [{
                    label: 'DATA PENGGUNA',
                    colspan: 5
                }],
                ['Username', 'Email', 'Amt. Posts', 'Info', 'Action']

            ],
            search: true,
            height: 'auto',
            width: '100%',
            stretchH: 'all',
            autoWrapRow: true,
            autoWrapCol: true,
            readOnly: true,
            contextMenu: true,
            licenseKey: 'non-commercial-and-evaluation' // for non-commercial use only
        });

        const exportPlugin = hot.getPlugin('exportFile');
        const button = document.querySelector('#export-file');

        button.addEventListener('click', () => {
            exportPlugin.downloadFile('csv', {
                bom: false,
                columnDelimiter: ',',
                columnHeaders: false,
                exportHiddenColumns: true,
                exportHiddenRows: true,
                fileExtension: 'csv',
                filename: 'Handsontable-CSV-file_[YYYY]-[MM]-[DD]',
                mimeType: 'text/csv',
                rowDelimiter: '\r\n',
                rowHeaders: true,
            });
        });

        const searchField = document.querySelector('#search_field');

        // add a search input listener
        searchField.addEventListener('keyup', (event) => {
            // get the `Search` plugin's instance
            const search = hot.getPlugin('search');
            // use the `Search` plugin's `query()` method
            const queryResult = search.query(event.target.value);

            console.log(queryResult);
            hot.render();
        });

        const container2 = document.querySelector('#table-2');

        const hot2 = new Handsontable(container2, {
            data: [
                ['nngdm', 'blavla@gmail.com', 34, '27 Januari 2024', 'lihat'],
                ['vespinef', 'vespin@hmail.com', 11, '8 Februari 2021', 'lihat'],
                ['arga', 'argagaming98@gmail.com', 16, '5 Desember 2023', 'lihat'],
            ],
            rowHeaders: true,
            nestedHeaders: [
                [{
                    label: 'DATA PENGGUNA',
                    colspan: 5
                }],
                ['Username', 'Email', 'Amt. Posts', 'Info', 'Action']

            ],
            search: true,
            height: 'auto',
            width: '100%',
            stretchH: 'all',
            autoWrapRow: true,
            autoWrapCol: true,
            readOnly: true,
            contextMenu: true,
            licenseKey: 'non-commercial-and-evaluation' // for non-commercial use only
        });

        const searchField2 = document.querySelector('#search_field_2');

        // add a search input listener
        searchField2.addEventListener('keyup', (event) => {
            // get the `Search` plugin's instance
            const search = hot.getPlugin('search');
            // use the `Search` plugin's `query()` method
            const queryResult = search.query(event.target.value);

            console.log(queryResult);
            hot.render();
        });
    </script>
@endsection
