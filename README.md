# wp-book plugin

Upon activation, it will do the following things –

Create a custom post type Book
Create a custom hierarchical taxonomy Book Category
Create a custom non-hierarchical taxonomy Book Tag
Create a custom meta box to save book meta information like Author Name, Price, Publisher, Year, Edition, URL, etc.
Create custom meta table and save all book meta information in that table (See how to extend Metadata API).
Create a custom admin settings page for Book. Settings option should contain options for changing currency, number of books displayed per page, etc. Settings menu should be displayed under the Books menu.
Create a shortcode [book] to display the book(s) information. Shortcode attributes should be id, author_name, year, category, tag, and publisher.
Create a custom widget to display books of selected category in the sidebar.
Create a custom dashboard widget which shows the top 5 book categories (based on count).
