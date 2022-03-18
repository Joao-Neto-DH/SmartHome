<div class="acess">
    <input type="checkbox" name="acess" id="{{ Str::lower($title)}}" class="acess-input" checked>
    <label for="{{ Str::lower($title) }}" class="acess-input-text"></label>
    <div class="acess-body">
        <img src="/asset/img{{ $img }}" class="acess-icon" alt="Acess Icon">
        <div class="acess-info">
            <h4 class="acess-title">{{ $title }}</h4>
            <p class="acess-description">Activo desde<br/>{{ $since }}</p>
        </div>
    </div>
</div>