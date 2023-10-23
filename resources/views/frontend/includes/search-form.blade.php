<div class="text-center d-inline-block">
    <form action="{{ route('search') }}" method="GET" class="search-form">
        <input type="text" name="keyword" placeholder="Cari artikel Dengan Judul..." required class="search-input">
        <button type="submit" class="search-button"><i class="fa fa-search"></i>Cari</button>
    </form>
</div>

<style>
    .search-form {
        display: flex;
        align-items: center;
    }

    .search-input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 4px;
        font-size: 14px;
        width: 200px;
    }

    .search-button {
        background-color: #f44336;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
    }

    .search-button:hover {
        background-color: #d32f2f;
    }

    .search-button i {
        margin-right: 4px;
    }
</style>
