<script src="https://cdn.tailwindcss.com"></script>

<script>
    tailwind.config = {
        theme: {
            extend: {
                maxWidth: {
                    '8xl': '84rem',
                }
            }
        }
    }
</script>


@foreach ($produits as $item)
    {{$item->nom}}
    {{$item->prix}}
    {{$item->couleur}}
    <br>
@endforeach

<br>

<nav class="h-10 bg-black "></nav>

<div class="h-14 max-w-5xl mx-auto flex justify-between items-center">
    <h3 class="text-xl font-medium text-black">Accessoires</h3>
    <a href="#" class="text-xs text-black ">Tout parcourir</a>
</div>

<div class="bg-gray-500"></div>

<h3>Coques et protections</h3>

<div class="max-w-8xl mx-auto ">
    <div class="grid grid-cols-3">
        <div class="border-p border-r border-gray-300 text-center">iPhone 13 Pro Max Leather Case with MagSafe</div>
        <div class="border-p border-r border-gray-300 text-center">iPhone 13 Pro Max Leather Case with MagSafe</div>
        <div class="border-p border-r border-gray-300 text-center">iPhone 13 Pro Max Leather Case with MagSafe</div>
    </div>
</div>

