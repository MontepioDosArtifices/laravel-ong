const inputSearch = document.querySelector('.customize-input > input');
const menuItems = Array.from(document.querySelectorAll('.sidebar-item'));
const inputDiv = inputSearch.offsetParent;
const resultDiv = document.createElement('div');

resultDiv.className = 'search-result';

inputSearch.addEventListener('input', e => search(e));

const search = e => {
  if(e.target.value.trim() == '') return switchDisplay('none');

  switchDisplay('flex');

  const inputValue = e.target.value.trim().toLowerCase();
  const searchResults = menuItems.filter(item => item.innerText.toLowerCase().includes(inputValue));

  if(searchResults.length === 0) return switchDisplay('none');

  showResults(searchResults)
};

const showResults = filteredItems => {
  clearResults();

  let link, text;

  filteredItems.map(item => {
    if(item.firstElementChild.href.includes('javascript:void(0)')) return false;

    text = document.createTextNode(item.innerText.trim());
    link = document.createElement('a');

    link.href = item.firstElementChild.href;
    link.target = item.firstElementChild.target;

    link.appendChild(text);
    resultDiv.appendChild(link);
  });

  inputDiv.appendChild(resultDiv);
};

const clearResults = () => resultDiv.innerHTML = null;

const switchDisplay = display => resultDiv.style.display = display;
