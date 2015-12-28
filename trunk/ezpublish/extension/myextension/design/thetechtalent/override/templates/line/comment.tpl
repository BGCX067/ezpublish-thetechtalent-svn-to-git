{* Comment - Line view *}

<div class="content-view-line">
    <div class="class-comment">

    <h2>{$node.data_map.author.content|wash}</h2>

    <div class="attribute-byline float-break">
        <p class="date">{$node.object.published|l10n(datetime)}</p>
    </div>

    <div class="attribute-message">
        <p>{$node.data_map.message.content|wash(xhtml)|break}</p>
    </div>

    </div>
</div>