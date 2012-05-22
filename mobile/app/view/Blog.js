Ext.define('GS.view.Blog', {
	extend: 'Ext.navigation.View',
	xtype: 'blog',

	config: {
		title: 'Blog',
		iconCls: 'bookmarks',
		cls: 'blog',	

		items: [
			{
				xtype: 'list',
				itemTpl: '{title}',
				title: 'Recent Posts',
				layout: 'fit',	

				store: {
					autoLoad: true,
					fields: ['title', 'author', 'content', 'link'],

					proxy: {
	                    type: 'jsonp',
	                    url: 'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://www.web2carz.com/rss/articles',
	                    
	                    reader: {
	                        type: 'json',
	                        rootProperty: 'responseData.feed.entries'
	                    }
	                }
				}
			}
		]
	}
});