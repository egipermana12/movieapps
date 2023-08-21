<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="playing-movie">
    <div class="flex flex-row justify-between items-center">
        <h2 class="uppercase tracking-widder text-gray-800 text-xl font-semibold">
            Now Playing
        </h2>
        <div class="relative" x-data="{ isOpen: false, search: '' }" @click.away="isOpen = false">
            <input type="text" x-model="search" class="bg-white text-sm font-light rounded-md w-64 px-4 pl-8 py-3 shadow-md focus:outline-none focus:border-gray-500 focus:ring-gray-500" placeholder="Search movie" @focus="isOpen = true" />
            <div class="absolute w-64 p-2 bg-white border border-gray-100 z-50 rounded text-xs text-gray-500 mt-1" x-show.transition.opacity="isOpen">
                <ul>
                    <!-- <li class="border-b border-gray-100">
                        <a href="#" class="block hover:bg-gray-200 px-3 py-3 flex items-center">
                            <img alt="poster" class="w-8" src="https://via.placeholder.com/50x75">
                            <span class="ml-2">
                                Avengers
                            </span>
                        </a>
                    </li>
                    <li>
                        <span x-text="search">
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <!-- start card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($playingMovie as $key => $val) : ?>
            <div class="mt-8 bg-white rounded-lg p-4 shadow-md">
                <a class="" href="#">
                    <img alt="sonic" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg" src="<?= $val['poster_path'] ?>">
                    </img>
                </a>
                <div class="mt-2">
                    <a class="text-lg mt-2 hover:text-gray-300" href="#">
                        <?= $val['title'] ?>
                    </a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewbox="0 0 24 24">
                            <g data-name="Layer 2">
                                <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star">
                                </path>
                            </g>
                        </svg>
                        <span class="ml-1">
                            <?= $val['vote_average'] ?>
                        </span>
                        <span class="mx-2">
                            |
                        </span>
                        <span>
                            <?= dateForRelease($val['release_date']) ?>
                        </span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        <?= $val['genres'] ?>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
    <!-- start card -->
    <div class="partial-content">
        <p>This is a partial view content.</p>
    </div>
</div>
<script>
    // async function cariFilm(query) {
    //     var csrfMeta = document.querySelector("meta.csrf");
    //     var csrfName = csrfMeta.getAttribute("name");
    //     var csrfHash = csrfMeta.getAttribute("content");
    //     var base_url = "<?= base_url('searchmovies') ?>";

    //     if (!query) {
    //         return [];
    //     }

    //     let response = await (await fetch(base_url, {
    //         method: 'POST',
    //         body: JSON.stringify({
    //             q: 'spiderman',
    //             [csrfName]: csrfHash
    //         }),
    //         headers: {
    //             'Content-type': 'application/json; charset=UTF-8',
    //         },
    //     })).json();

    //     return response;

    // }
</script>
<?= $this->endSection() ?>
