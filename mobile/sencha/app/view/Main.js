Ext.define("GS.view.Main", {
    extend: 'Ext.tab.Panel',
    requires: ['Ext.TitleBar'],
    
    config: {
        tabBarPosition: 'bottom',
        ui: 'neutral',
        
        items: [
            {
                xtype: 'homepanel'
            },
            {
                xtype: 'about'
            },
            {
                xtype: 'blog'
            },
            {
                xtype: 'contactform'
            }
        ]
    }
});