plugin {
    tx_searchcore {
        settings {
            connection {
                host = localhost
                port = 9200
            }

            index {
                allowedTables = tt_content
            }
        }
    }
}

module.tx_searchcore < plugin.tx_searchcore
