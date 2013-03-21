<html>
<head>
<script src="script.js"></script>
<link rel="stylesheet" href="themes/default/style.css" type="text/css">
<script>
window.onload = function() {
window.dock = new SimpleDock(
                                                document.getElementById('dock'),
                                                [{
                                                    name:      '../../icons/Mail',
                                                    label:     'test1',
                                                    extension: '.png',
                                                    sizes:     [44,100],
                                                    menuItems: ['open'],
                                                    menuClick: [function(){alert('test1');}],
                                                    onclick:   function(){alert('test2');}
                                          }, {
                                                    name:      '../../icons/Mail',
                                                    label:     'test2',
                                                    extension: '.png',
                                                    sizes:     [44,100],
                                                    menuItems: ['open'],
                                                    menuClick: [function(){alert('test2');}],
                                                    onclick:   function(){alert('test2');}
                                          }, {
                                                    name:      '../../icons/Mail',
                                                    label:     'test3',
                                                    extension: '.png',
                                                    sizes:     [44,100],
                                                    menuItems: ['open'],
                                                    menuClick: [function(){alert('test3');}],
                                                    onclick:   function(){alert('test2');}
                                          }, {
                                                    name:      '../../icons/Mail',
                                                    label:     'test4',
                                                    extension: '.png',
                                                    sizes:     [44,100],
                                                    menuItems: ['open'],
                                                    menuClick: [function(){alert('test4');}],
                                                    onclick:   function(){alert('test2');}
                                          }, {
                                                    name:      '../../icons/Mail',
                                                    label:     'test5',
                                                    extension: '.png',
                                                    sizes:     [44,100],
                                                    menuItems: ['open'],
                                                    menuClick: [function(){alert('test5');}],
                                                    onclick:   function(){alert('test2');}
                                          }],
                                                44,
                                                100,
                                                3,
                                                5,
                                                10,
                                                                                               false);
};
</script>
</head>
<body>
<div id="dockContainer" style="left: 589px;"><div id="background"></div><div id="dock" style="top: 87px;"></div></div>
</body>
</html>