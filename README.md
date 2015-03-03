# WPIE: WordPress Information Extraction lib
Consolidate all info extraction into one place.

Goals:
- Extract content from posts, comments, or straight HTML (eg a feed) into a uniform format
- Handle media consistently and don't duplicate code so we don't have to fix the same bugs 5 times.
- Be able to store extracted content into post/comment meta consistently so APIs and other services can quickly get that data without reparsing the HTML all the time.

Anti-Goals:
- Fast access to the data in post/comment meta. Use other services if you want fast access (eg Elasticsearch). Post/comment meta is good as a cache for lookup, not as a query engine.
- Providing hooks to filter the data. At least initially. The goal is consistency. A user can always modify the data returned from the lib.
