Ext.define('GS.view.Home', {
	extend: 'Ext.Panel',
	xtype: 'homepanel',

	config: {
		title: 'Home',
		iconCls: 'home',
		cls: 'home',
		layout: 'hbox',

		items: [
	        
			// ### TOP TOOLBAR ###

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

	        // ### HIDDEN OPTIONS PANE ###

	        {
	        	xtype: 'panel',
	        	title: 'Options',
	        	id: 'options',
	        	scrollable: true,
	        	styleHtmlContent: true,
	        	hidden: true,
	        	flex: 1,
	        	html: 'Hidden View'
	        },

	        // ### MAIN HOME VIEW CONTENT ###

	        {
	            xtype: 'panel',			
	            scrollable: true,
				styleHtmlContent: true,
				flex: 4,
				
				html: [
		            '<img class="logo" src="../../../images/logo.png" />',
		            '<br />',
		            "<h2>Raw Designs</h2>",
		            "<p>Web + New Media</p>"
		        ].join(""),
	        }
	    ],
	}
});