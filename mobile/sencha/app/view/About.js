Ext.define('GS.view.About', {
	extend: 'Ext.Panel',
	xtype: 'about',

	config: {
		title: 'About',
		iconCls: 'info',
		cls: 'about',
		layout: 'hbox',

		items: [
	        {
	            xtype: 'toolbar',
	            ui: 'neutral',
	            docked:'top',
				style: 'box-shadow:0px 0px 10px rgba(0, 0, 0, .5);',
				defaults: {
					iconMask: true
				},
				
		        items: [
		        	{
		        		xtype: 'button',
		        		iconCls: 'settings',

		        		listeners: {
					        tap: function() {
					            alert('Soon, I will be showing more content!  I can see you are running ' + Ext.os.name + ', version ' + Ext.os.version);

					        }
					    }
		        	}
		        ]
	        },
	        {
	            xtype: 'panel',			
	            scrollable: true,
				styleHtmlContent: true,
				flex: 4,
				
				html: [
		            '<img class="logo" src="../../../images/logo_home.png" />',
		            '<br />',
		            "<h2>Hey There!</h2>"
		        ].join(""),
	        }
	    ],
	}
});

var aboutPanel = Ext.create('Ext.Panel', {
    html: 'About this app',
});