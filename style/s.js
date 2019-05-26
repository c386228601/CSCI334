var tab1 = document.getElementById('tab1'),
                tab2 = document.getElementById('tab2'),
                tab3 = document.getElementById('tab3'),
                c1 = document.getElementById('c1'),
                c2 = document.getElementById('c2'),
                c3 = document.getElementById('c3');

            function changeTab1() {
                tab1.className = 'selected';
                tab2.className = '';
                tab3.className = '';
                c1.className = 'show'
                c2.className = '';
                c3.className = '';
            }

            function changeTab2() {
                tab1.className = '';
                tab2.className = 'selected';
                tab3.className = '';
                c1.className = '';
                c2.className = 'show';
                c3.className = '';
            }

            function changeTab3() {
                tab1.className = '';
                tab2.className = '';
                tab3.className = 'selected';
                c1.className = ''
                c2.className = '';
                c3.className = 'show';
            }