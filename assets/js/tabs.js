document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.nav-li');
  const sections = document.querySelectorAll('.content-section');

  tabs.forEach(tab => {
    tab.addEventListener('click', function (e) {
      e.preventDefault();
      const target = this.getAttribute('href'); 

      sections.forEach(sec => sec.classList.add('hidden'));
      sections.forEach(sec => sec.classList.remove('block'));

      console.log(sections);

      const activeSection = document.querySelector(target);
      if (activeSection) {
        activeSection.classList.remove('hidden');
        activeSection.classList.add('block');
      }

      tabs.forEach(t => t.classList.remove('text-blue-600', 'font-bold'));
      tabs.forEach(t => t.classList.add('text-gray-600'));

      this.classList.add('text-blue-600', 'font-bold');
      this.classList.remove('text-gray-600');

      console.log(target);
      console.log(this.className);
    });
  });
});
