let searchForm = document.getElementById('search')
let searchInput = document.getElementById('searchInput')

searchForm.addEventListener('submit', (e) => {
    e.preventDefault()
    let val = searchInput.value
    location.href = `http://localhost/Artemis-Jobs/profile_timeline?search=${val}`
})