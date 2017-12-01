timely.define(["libs/twig","oneday"],function(e){var t,n;return t=e.twig,n=t({id:"../js_src/oneday.twig",data:[{type:"output",stack:[{type:"Twig.expression.type.variable",value:"navigation",match:["navigation"]},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:'\n\n<table class="ai1ec-'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"type",match:["type"]}]},{type:"raw",value:"-view-original"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"has_product_buy_button",match:["has_product_buy_button"]}],output:[{type:"raw",value:" ai1ec-has-product-buy-button"}]}},{type:"raw",value:'">\n	<thead>\n		<tr>\n			'},{type:"logic",token:{type:"Twig.logic.type.for",key_var:"date",value_var:"day",expression:[{type:"Twig.expression.type.variable",value:"cell_array",match:["cell_array"]}],output:[{type:"raw",value:'				<th class="ai1ec-weekday\n					'},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"today"},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"}],output:[{type:"raw",value:"ai1ec-today"}]}},{type:"raw",value:'">\n					'},{type:"raw",value:"\n					"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"show_reveal_button",match:["show_reveal_button"]},{type:"Twig.expression.type.variable",value:"loop",match:["loop"]},{type:"Twig.expression.type.key.period",key:"last"},{type:"Twig.expression.type.operator.binary",value:"and",precidence:13,associativity:"leftToRight",operator:"and"}],output:[{type:"raw",value:'						<div class="ai1ec-reveal-full-day">\n							<button class="ai1ec-btn ai1ec-btn-info ai1ec-btn-xs\n									ai1ec-tooltip-trigger"\n								data-placement="left"\n								title="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_full_day",match:["text_full_day"]},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'">\n								<i class="ai1ec-fa ai1ec-fa-expand"></i>\n							</button>\n						</div>\n					'}]}},{type:"raw",value:'					<a class="ai1ec-load-view" href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"href"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n						'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"data_type",match:["data_type"]},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:'>\n						<span class="ai1ec-weekday-date">'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"day"}]},{type:"raw",value:'</span>\n						<span class="ai1ec-weekday-day">'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"weekday"}]},{type:"raw",value:"</span>\n					</a>\n				</th>\n			"}]}},{type:"raw",value:"		</tr>\n		<tr>\n			"},{type:"logic",token:{type:"Twig.logic.type.for",key_var:null,value_var:"day",expression:[{type:"Twig.expression.type.variable",value:"cell_array",match:["cell_array"]}],output:[{type:"raw",value:'				<td class="ai1ec-allday-events\n					'},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"today"},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"}],output:[{type:"raw",value:"ai1ec-today"}]}},{type:"raw",value:'">\n\n					'},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"loop",match:["loop"]},{type:"Twig.expression.type.key.period",key:"first"}],output:[{type:"raw",value:'						<div class="ai1ec-allday-label">'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_all_day",match:["text_all_day"]}]},{type:"raw",value:"</div>\n					"}]}},{type:"raw",value:"\n					"},{type:"logic",token:{type:"Twig.logic.type.for",key_var:null,value_var:"event",expression:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"allday"}],output:[{type:"raw",value:'						<a href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"permalink"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n							data-instance-id="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"instance_id"}]},{type:"raw",value:'"\n							class="ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger\n								ai1ec-event-id-'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"post_id"}]},{type:"raw",value:"\n								ai1ec-event-instance-id-"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"instance_id"}]},{type:"raw",value:"\n								ai1ec-allday\n								"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"is_multiday"}],output:[{type:"raw",value:"ai1ec-multiday"}]}},{type:"raw",value:'"\n							>\n							<div class="ai1ec-event"\n								 style="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"color_style"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n								 '},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url"},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"}],output:[{type:"raw",value:'									data-ticket-url="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n								 '}]}},{type:"raw",value:'>\n								<span class="ai1ec-event-title">\n									'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"filtered_title"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n									"},{type:"raw",value:'<br/>\n	<span class="instructor">\n'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"instructor"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n</span>\n	"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"show_location_in_title",match:["show_location_in_title"]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"venue"},{type:"Twig.expression.type.operator.binary",value:"and",precidence:13,associativity:"leftToRight",operator:"and"}],output:[{type:"raw",value:'										<span class="ai1ec-event-location"\n											>'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_venue_separator",match:["text_venue_separator"]},{type:"Twig.expression.type.filter",value:"format",match:["| format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"venue"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:"</span>\n									"}]}},{type:"raw",value:'								</span>\n							</div>\n						</a>\n\n						<div class="ai1ec-popover ai1ec-popup ai1ec-popup-in-'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"type",match:["type"]}]},{type:"raw",value:"-view\n									ai1ec-event-id-"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"post_id"}]},{type:"raw",value:"\n									ai1ec-event-instance-id-"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"instance_id"}]},{type:"raw",value:"\n									"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url"},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"}],output:[{type:"raw",value:"										ai1ec-has-tickets-button\n									"}]}},{type:"raw",value:'">\n							'},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"category_colors"}],output:[{type:"raw",value:'								<div class="ai1ec-color-swatches">'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"category_colors"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"</div>\n							"}]}},{type:"raw",value:'							<span class="ai1ec-popup-title">\n								<a class="ai1ec-load-event"\n									href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"permalink"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n									>'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"filtered_title"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"</a>\n								"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"show_location_in_title",match:["show_location_in_title"]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"venue"},{type:"Twig.expression.type.operator.binary",value:"and",precidence:13,associativity:"leftToRight",operator:"and"}],output:[{type:"raw",value:'									<span class="ai1ec-event-location"\n										>'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_venue_separator",match:["text_venue_separator"]},{type:"Twig.expression.type.filter",value:"format",match:["| format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"venue"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:"</span>\n								"}]}},{type:"raw",value:"							</span>\n\n							"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"edit_post_link"}],output:[{type:"raw",value:'								<a class="post-edit-link"\n									href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"edit_post_link"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:'">\n									<i class="ai1ec-fa ai1ec-fa-pencil"></i> '},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_edit",match:["text_edit"]}]},{type:"raw",value:"\n								</a>\n							"}]}},{type:"raw",value:'\n							<div class="ai1ec-event-time">\n								'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"popup_timespan"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:'\n							</div>\n\n							<a class="ai1ec-load-event"\n								href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"permalink"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'">\n								'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"avatar_not_wrapped"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n							</a>\n							"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"action_buttons",match:["action_buttons"]},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n							"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"post_excerpt"}],output:[{type:"raw",value:'								<div class="ai1ec-popup-excerpt">'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"post_excerpt"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"</div>\n							"}]}},{type:"raw",value:"						</div>\n\n					"}]}},{type:"raw",value:" "},{type:"raw",value:"\n\n				</td>\n			"}]}},{type:"raw",value:" "},{type:"raw",value:'\n		</tr>\n\n	</thead>\n	<tbody>\n		<tr class="ai1ec-'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"type",match:["type"]}]},{type:"raw",value:'">\n			'},{type:"logic",token:{type:"Twig.logic.type.for",key_var:null,value_var:"day",expression:[{type:"Twig.expression.type.variable",value:"cell_array",match:["cell_array"]}],output:[{type:"raw",value:"				<td "},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"today"}],output:[{type:"raw",value:'class="ai1ec-today"'}]}},{type:"raw",value:">\n\n					"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"loop",match:["loop"]},{type:"Twig.expression.type.key.period",key:"first"}],output:[{type:"raw",value:'						<div class="ai1ec-grid-container">\n							'},{type:"logic",token:{type:"Twig.logic.type.for",key_var:"h",value_var:"hour",expression:[{type:"Twig.expression.type.variable",value:"hours",match:["hours"]}],output:[{type:"raw",value:'								<div class="ai1ec-hour-marker\n									'},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"h",match:["h"]},{type:"Twig.expression.type.number",value:8,match:["8",null]},{type:"Twig.expression.type.operator.binary",value:">=",precidence:8,associativity:"leftToRight",operator:">="},{type:"Twig.expression.type.variable",value:"h",match:["h"]},{type:"Twig.expression.type.number",value:18,match:["18",null]},{type:"Twig.expression.type.operator.binary",value:"<",precidence:8,associativity:"leftToRight",operator:"<"},{type:"Twig.expression.type.operator.binary",value:"and",precidence:13,associativity:"leftToRight",operator:"and"}],output:[{type:"raw",value:"ai1ec-business-hour"}]}},{type:"raw",value:'"\n									style="top: '},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"h",match:["h"]},{type:"Twig.expression.type.number",value:60,match:["60",null]},{type:"Twig.expression.type.operator.binary",value:"*",precidence:5,associativity:"leftToRight",operator:"*"}]},{type:"raw",value:'px;">\n									<div>\n										'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"hour",match:["hour"]},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n									</div>\n								</div>\n								"},{type:"logic",token:{type:"Twig.logic.type.for",key_var:null,value_var:"quarter",expression:[{type:"Twig.expression.type.number",value:1,match:["1",null]},{type:"Twig.expression.type.number",value:3,match:["3",null]},{type:"Twig.expression.type.operator.binary",value:"..",precidence:20,associativity:"leftToRight",operator:".."}],output:[{type:"raw",value:'									<div class="ai1ec-quarter-marker"\n										style="top: '},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"h",match:["h"]},{type:"Twig.expression.type.number",value:60,match:["60",null]},{type:"Twig.expression.type.operator.binary",value:"*",precidence:5,associativity:"leftToRight",operator:"*"},{type:"Twig.expression.type.variable",value:"quarter",match:["quarter"]},{type:"Twig.expression.type.number",value:15,match:["15",null]},{type:"Twig.expression.type.operator.binary",value:"*",precidence:5,associativity:"leftToRight",operator:"*"},{type:"Twig.expression.type.operator.binary",value:"+",precidence:6,associativity:"leftToRight",operator:"+"}]},{type:"raw",value:'px;"></div>\n								'}]}},{type:"raw",value:"							"}]}},{type:"raw",value:"							"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"today"},{type:"Twig.expression.type.variable",value:"show_now",match:["show_now"]},{type:"Twig.expression.type.operator.binary",value:"or",precidence:14,associativity:"leftToRight",operator:"or"}],output:[{type:"raw",value:'								<div class="ai1ec-now-marker" style="top: '},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"now_top",match:["now_top"]}]},{type:"raw",value:'px;">\n									<div>\n										'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_now_label",match:["text_now_label"]}]},{type:"raw",value:" "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"now_text",match:["now_text"]}]},{type:"raw",value:"\n									</div>\n								</div>\n							"}]}},{type:"raw",value:"						</div>\n					"}]}},{type:"raw",value:'\n					<div class="ai1ec-day">\n\n						'},{type:"logic",token:{type:"Twig.logic.type.for",key_var:null,value_var:"day_array",expression:[{type:"Twig.expression.type.variable",value:"day",match:["day"]},{type:"Twig.expression.type.key.period",key:"notallday"}],output:[{type:"raw",value:"							"},{type:"logic",token:{type:"Twig.logic.type.set",key:"event",expression:[{type:"Twig.expression.type.variable",value:"day_array",match:["day_array"]},{type:"Twig.expression.type.key.period",key:"event"}]}},{type:"raw",value:'							<a href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"permalink"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n								data-instance-id="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"instance_id"}]},{type:"raw",value:'"\n								class="ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger\n									ai1ec-event-id-'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"post_id"}]},{type:"raw",value:"\n									ai1ec-event-instance-id-"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"instance_id"}]},{type:"raw",value:"\n									"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"start_truncated"}],output:[{type:"raw",value:"ai1ec-start-truncated"}]}},{type:"raw",value:"									"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"end_truncated"}],output:[{type:"raw",value:"ai1ec-end-truncated"}]}},{type:"raw",value:"									"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"is_multiday"}],output:[{type:"raw",value:"ai1ec-multiday"}]}},{type:"raw",value:'"\n								style="top: '},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"day_array",match:["day_array"]},{type:"Twig.expression.type.key.period",key:"top"}]},{type:"raw",value:"px;\n									height: "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"day_array",match:["day_array"]},{type:"Twig.expression.type.key.period",key:"height"}]},{type:"raw",value:"px;\n									left: "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"day_array",match:["day_array"]},{type:"Twig.expression.type.key.period",key:"indent"},{type:"Twig.expression.type.variable",value:"indent_multiplier",match:["indent_multiplier"]},{type:"Twig.expression.type.operator.binary",value:"*",precidence:5,associativity:"leftToRight",operator:"*"},{type:"Twig.expression.type.variable",value:"indent_offset",match:["indent_offset"]},{type:"Twig.expression.type.operator.binary",value:"+",precidence:6,associativity:"leftToRight",operator:"+"}]},{type:"raw",value:"px;\n									"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"color_style"}]},{type:"raw",value:"\n									"},{type:"logic",token:{type:"Twig.logic.type.set",key:"faded_color",expression:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"faded_color"}]}},{type:"raw",value:"									"},{type:"logic",token:{type:"Twig.logic.type.set",key:"rgba_color",expression:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"rgba_color"}]}},{type:"raw",value:"									"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"faded_color",match:["faded_color"]}],output:[{type:"raw",value:"										"},{type:"logic",token:{type:"Twig.logic.type.set",key:"rgba1",expression:[{type:"Twig.expression.type.variable",value:"rgba_color",match:["rgba_color"]},{type:"Twig.expression.type.filter",value:"format",match:["| format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"0.05"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]}},{type:"raw",value:"										"},{type:"logic",token:{type:"Twig.logic.type.set",key:"rgba3",expression:[{type:"Twig.expression.type.variable",value:"rgba_color",match:["rgba_color"]},{type:"Twig.expression.type.filter",value:"format",match:["| format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"0.3"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]}},{type:"raw",value:"										border: 1px solid "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"faded_color",match:["faded_color"]}]},{type:"raw",value:";\n										border-color: "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba_color",match:["rgba_color"]},{type:"Twig.expression.type.filter",value:"format",match:["| format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"0.5"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:";\n										background-image: -webkit-linear-gradient( top, "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba1",match:["rgba1"]}]},{type:"raw",value:", "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba3",match:["rgba3"]}]},{type:"raw",value:" 50px );\n										background-image: -moz-linear-gradient( top, "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba1",match:["rgba1"]}]},{type:"raw",value:", "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba3",match:["rgba3"]}]},{type:"raw",value:" 50px );\n										background-image: -ms-linear-gradient( top, "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba1",match:["rgba1"]}]},{type:"raw",value:", "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba3",match:["rgba3"]}]},{type:"raw",value:" 50px );\n										background-image: -o-linear-gradient( top, "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba1",match:["rgba1"]}]},{type:"raw",value:", "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba3",match:["rgba3"]}]},{type:"raw",value:" 50px );\n										background-image: linear-gradient( top, "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba1",match:["rgba1"]}]},{type:"raw",value:", "},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"rgba3",match:["rgba3"]}]},{type:"raw",value:" 50px );\n									"}]}},{type:"raw",value:'									">\n\n								'},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"start_truncated"}],output:[{type:"raw",value:'									<div class="ai1ec-start-truncator">◤</div>\n								'}]}},{type:"raw",value:"								"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"end_truncated"}],output:[{type:"raw",value:'									<div class="ai1ec-end-truncator">◢</div>\n								'}]}},{type:"raw",value:'\n								<div class="ai1ec-event"\n									'},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url"},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"}],output:[{type:"raw",value:'										data-ticket-url="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n									'}]}},{type:"raw",value:'>\n									<span class="ai1ec-event-time">\n										'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"short_start_time"}]},{type:"raw",value:'\n									</span>\n									<span class="ai1ec-event-title">\n										'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"filtered_title"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n										"},{type:"raw",value:'<br/>\n	<span class="instructor">\n'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"instructor"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n</span>\n	"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"show_location_in_title",match:["show_location_in_title"]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"venue"},{type:"Twig.expression.type.operator.binary",value:"and",precidence:13,associativity:"leftToRight",operator:"and"}],output:[{type:"raw",value:'											<span class="ai1ec-event-location"\n												>'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_venue_separator",match:["text_venue_separator"]},{type:"Twig.expression.type.filter",value:"format",match:["| format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"venue"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:"</span>\n										"}]}},{type:"raw",value:'									</span>\n								</div>\n\n							</a>\n\n							<div class="ai1ec-popover ai1ec-popup ai1ec-popup-in-'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"type",match:["type"]}]},{type:"raw",value:"-view\n										ai1ec-event-id-"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"post_id"}]},{type:"raw",value:"\n										ai1ec-event-instance-id-"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"instance_id"}]},{type:"raw",value:"\n										"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url"},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"}],output:[{type:"raw",value:"											ai1ec-has-tickets-button\n										"}]}},{type:"raw",value:'">\n								'},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"category_colors"}],output:[{type:"raw",value:'									<div class="ai1ec-color-swatches">'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"category_colors"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"</div>\n								"}]}},{type:"raw",value:'								<span class="ai1ec-popup-title">\n									<a class="ai1ec-load-event"\n										href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"permalink"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n										>'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"filtered_title"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"</a>\n									"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"show_location_in_title",match:["show_location_in_title"]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"venue"},{type:"Twig.expression.type.operator.binary",value:"and",precidence:13,associativity:"leftToRight",operator:"and"}],output:[{type:"raw",value:'										<span class="ai1ec-event-location"\n											>'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_venue_separator",match:["text_venue_separator"]},{type:"Twig.expression.type.filter",value:"format",match:["| format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"venue"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:"</span>\n									"}]}},{type:"raw",value:"									"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"is_ticket_button_enabled",match:["is_ticket_button_enabled"]},{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url"},{type:"Twig.expression.type.operator.binary",value:"and",precidence:13,associativity:"leftToRight",operator:"and"}],output:[{type:"raw",value:'										<a class="ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs\n											ai1ec-buy-tickets" target="_blank"\n											href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'"\n											>'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"ticket_url_label"}]},{type:"raw",value:"</a>\n									"}]}},{type:"raw",value:"								</span>\n\n								"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"edit_post_link"}],output:[{type:"raw",value:'									<a class="post-edit-link"\n										href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"edit_post_link"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:'">\n										<i class="ai1ec-fa ai1ec-fa-pencil"></i> '},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"text_edit",match:["text_edit"]}]},{type:"raw",value:"\n									</a>\n								"}]}},{type:"raw",value:'\n								<div class="ai1ec-event-time">\n									'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"popup_timespan"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:'\n								</div>\n\n								<a class="ai1ec-load-event"\n									href="'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"permalink"},{type:"Twig.expression.type.filter",value:"e",match:["| e","e"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"html_attr"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}]},{type:"raw",value:'">\n									'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"avatar_not_wrapped"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n								</a>\n								"},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"action_buttons",match:["action_buttons"]},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"\n								"},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"post_excerpt"}],output:[{type:"raw",value:'									<div class="ai1ec-popup-excerpt">'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"event",match:["event"]},{type:"Twig.expression.type.key.period",key:"post_excerpt"},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"</div>\n								"}]}},{type:"raw",value:"							</div>\n\n						"}]}},{type:"raw",value:" "},{type:"raw",value:"\n					</div>\n\n				</td>\n			"}]}},{type:"raw",value:" "},{type:"raw",value:'\n		</tr>\n	</tbody>\n\n</table>\n\n<div class="ai1ec-pull-left">'},{type:"output",stack:[{type:"Twig.expression.type.variable",value:"pagination_links",match:["pagination_links"]},{type:"Twig.expression.type.filter",value:"raw",match:["| raw","raw"]}]},{type:"raw",value:"</div>\n"}],precompiled:!0}),n});