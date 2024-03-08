<div>
    <h1>
        Assets Page
    </h1>
    <p>Current UNIX Timestamp is: {{ time() }}</p>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <div>
        <input type="text" data-picker>
    </div>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
@endassets

@assets
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets


@script
<script>
    console.log('initializing the assets component...');
    let refreshCounts = 1;
    setInterval(
        function ()
        {
            $wire.$refresh();
            console.log(`refreshed ${refreshCounts} times.`)
            refreshCounts++;
        },
        1000
    );
    new Pikaday({ field: $wire.$el.querySelector('[data-picker]') });
</script>
@endscript
