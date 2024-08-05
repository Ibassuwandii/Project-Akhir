<x-app menu="biodiv" header="Divisi | Biodiv">
    {{ $slot }}
    <style>
        .card-header {
            background: linear-gradient(45deg, #0356588c, #13b7b7);
            color: white;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-group .btn {
            margin-right: 5px;
        }
        .table thead th {
            text-align: center;
        }
        .table td {
            vertical-align: middle;
            text-align: center;
        }
        .text-danger {
            color: #130404 !important;
        }
        .text-muted {
            color: #a51717 !important;
        }
        .btn-success .fa-plus-circle {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</x-app>
