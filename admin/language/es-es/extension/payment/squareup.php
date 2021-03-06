<?php

// Heading
$_['heading_title']                                     = 'Square';
$_['heading_title_transaction']                         = 'Ver Transacción #%s';

// Help
$_['help_total']                                        = 'Total del Pedido a Alcanzar antes de que el método de pago se active.';
$_['help_local_cron']                                   = 'Insertar este comando en la pestaña CRON del servidor web. Configurarlo para que se ejecute al menos una vez al día.';
$_['help_remote_cron']                                  = 'Usar esta URL para configurar una tarea CRON a través de un servicio CRON basado en la web. Configurarlo para que se ejecute al menos una vez al día.';
$_['help_recurring_status']                             = 'Habilitar para permitir pagos periódicos recurrentes.<br />NOTE: También se debe configurar una tarea CRON diaria.';
$_['help_cron_email']                                   = 'Se enviará un resumen de la tarea recurrente a este Email una vez finalizado.';
$_['help_cron_email_status']                            = 'Habilitar para recibir un resumen después de cada tarea CRON.';
$_['help_notify_recurring_success']                     = 'Notificar a los clientes sobre transacciones recurrentes exitosas.';
$_['help_notify_recurring_fail']                        = 'Notificar a los clientes sobre transacciones recurrentes fallidas.';

// Tab
$_['tab_setting']                                       = 'Configuración';
$_['tab_transaction']                                   = 'Transacciones';
$_['tab_cron']                                          = 'CRON';
$_['tab_recurring']                                     = 'Pagos Recurrentes';

// Text
$_['text_access_token_expires_label']                   = 'Token de Acceso Expirado';
$_['text_access_token_expires_placeholder']             = 'No Configurado';
$_['text_acknowledge_cron']                             = 'Confirmo que he configurado una tarea CRON automatizada usando uno de los métodos anteriores.';
$_['text_admin_notifications']                          = 'Notificaciones de Administrador';
$_['text_authorize_label']                              = 'Autorizar';
$_['text_canceled_success']                             = 'Operación Exitosa: Se ha cancelado este pago.';
$_['text_capture']                                      = 'Capturar';
$_['text_client_id_help']                               = 'Obtener de la página Administrar aplicación en Square';
$_['text_client_id_label']                              = 'Square Aplicación ID';
$_['text_client_id_placeholder']                        = 'Square Aplicación ID';
$_['text_client_secret_help']                           = 'Obtener de la página Administrar aplicación en Square';
$_['text_client_secret_label']                          = 'OAuth Aplicación Secret';
$_['text_client_secret_placeholder']                    = 'OAuth Aplicación Secret';
$_['text_confirm_action']                               = 'Seguro?';
$_['text_confirm_cancel']                               = 'Seguro de Cancelar Pagos Recurrentes?';
$_['text_confirm_capture']                              = 'Se está a punto de Capturar el siguiente Monto: <strong>%s</strong>. Cliquear OK para Continuar.';
$_['text_confirm_refund']                               = 'Indicar el Motivo del Reembolso:';
$_['text_confirm_void']                                 = 'Se está a punto de anular el siguiente Monto: <strong>%s</strong>. Cliquear OK para Continuar.';
$_['text_connected']                                    = 'Conectado';
$_['text_connected_info']                               = "Volver a conectarse para cambiar de cuenta o revocar manualmente el acceso de esta extensión desde la consola de la aplicación Square. Actualizar manualmente el token de acceso si han pasado aproximadamente 45 días desde la última venta o reconexión.";
$_['text_connection_section']                           = 'Conexión Square';
$_['text_connection_success']                           = 'Conectado Exitosamente.';
$_['text_cron_email']                                   = 'Enviar Resumen de Tareas a este Email:';
$_['text_cron_email_status']                            = 'Emviar Resumen de Email:';
$_['text_customer_notifications']                       = 'Notificaciones de Clientes';
$_['text_debug_disabled']                               = 'Deshabilitado'; 
$_['text_debug_enabled']                                = 'Habilitado'; 
$_['text_debug_help']                                   = 'Las solicitudes y respuestas de API se registrarán en el registro de errores de OpenCart. Usar sólo para propósitos de depuración y desarrollo.';
$_['text_debug_label']                                  = 'Registro de Depuración';
$_['text_delay_capture_help']                           = 'Sólo autorizat transacciones o realizat cargos automáticamente';
$_['text_delay_capture_label']                          = 'Tipo de Transacción';
$_['text_disabled_connect_help_text']                   = 'El ID del Cliente y el Secret son Obligatorios.';
$_['text_edit_heading']                                 = 'Editar Square';
$_['text_enable_sandbox_help']                          = 'Habilitar Sandbox para Testear Transacciones.';
$_['text_enable_sandbox_label']                         = 'Habilitar Modo Sandbox';
$_['text_executables']                                  = 'Métodos de Ejecución del CRON';
$_['text_extension']                                    = 'Extensiones';
$_['text_extension_status']                             = 'Estado de Extensión';
$_['text_extension_status_disabled']                    = 'Deshabilitado'; 
$_['text_extension_status_enabled']                     = 'Habilitado'; 
$_['text_extension_status_help']                        = 'Habilitar o deshabilitar Método de pago'; 
$_['text_insert_amount']                                = 'Introducir el Importe del Reembolso. Máximo: %s en %s:';
$_['text_loading']                                      = 'Cargando Datos... Esperar...';
$_['text_loading_short']                                = 'Esperar...';
$_['text_local_cron']                                   = 'Método #1 - Tarea del CRON:';
$_['text_location_error']                               = 'Se ha producido un error al intentar sincronizar ubicaciones y token: %s';
$_['text_location_help']                                = 'Seleccionar qué Ubicación Square configurada se utilizará para las Transacciones. Se deben tener habilitadas las capacidades de procesamiento de tarjetas.';
$_['text_location_label']                               = 'Ubicación';
$_['text_manage']                                       = 'Transacción de Tarjeta de Crédito (Square)';
$_['text_manage_tooltip']                               = 'Ver Detalles / Capturar / Anular / Reembolsar';
$_['text_merchant_info_section_heading']                = 'Información de Comercio';
$_['text_merchant_name_label']                          = 'Nombre de Comercio';
$_['text_merchant_name_placeholder']                    = 'No Configurado';
$_['text_no_appropriate_locations_warning']             = 'No hay ubicaciones capaces de configurar el procesamiento de tarjetas en línea de la cuenta de Square.';
$_['text_no_location_selected_warning']                 = 'No se seleccionó Ubicación.';
$_['text_no_locations_label']                           = 'Ubicaciones  Inválidas';
$_['text_no_transactions']                              = 'Aún no se han registrado transacciones.';
$_['text_not_connected']                                = 'No Conectado';
$_['text_not_connected_info']                           = 'Al clickear en este botón, se conectará este módulo a la cuenta de Square y se activará el servicio.';
$_['text_notification_ssl']                             = 'Asegurarse de tener SSL habilitado en la página de pago. De modo contrario la Aplicación no funcionará.';
$_['text_notify_recurring_fail']                        = 'Transacción Recurrente Fallida:';
$_['text_notify_recurring_success']                     = 'Transacción Recurrente Exitosa:';
$_['text_ok']                                           = 'OK';
$_['text_order_history_cancel']                         = 'Un Administrador ha cancelado los Pagos Recurrentes. La Tarjeta ya no será cargada.';
$_['text_payment_method_name_help']                     = 'Nombre del Método de Pago';
$_['text_payment_method_name_label']                    = 'Nombre del Método de Pago';
$_['text_payment_method_name_placeholder']              = 'Tarjeta de Crédito/Débito';
$_['text_recurring_info']                               = 'Asegurarse de configurar una tarea CRON diaria utilizando uno de los siguientes métodos. Los trabajos de CRON ayudan con:<br /><br />&bull; Actualización automática del token de acceso a la API <br />&bull; Procesamiento de Transacciones Recurrentes';
$_['text_recurring_status']                             = 'Estado de los Pagos Recurrentes';
$_['text_redirect_uri_help']                            = 'Pegar este link en el campo de Redirección URI en Gestor de Aplicaciones/oAuth';
$_['text_redirect_uri_label']                           = 'URL de Redirección Square OAuth';
$_['text_refresh_access_token_success']                 = 'Se actualizó exitosamente la Conexión a la Cuenta Square.'; 
$_['text_refresh_token']                                = 'Re-crear token';
$_['text_refund']                                       = 'Reembolso';
$_['text_refund_details']                               = 'Detalles de Reembolso';
$_['text_refunded_amount']                              = 'Reintegrado: %s. Estado del Reintegro: %s. Razón del Reintegro: %s';
$_['text_refunds']                                      = 'Reintegros (%s)';
$_['text_remote_cron']                                  = 'Método #2 - CRON Remoto:';
$_['text_sale_label']                                   = 'Venta';
$_['text_sandbox_access_token_help']                    = 'Obtener de la página Administrar aplicación en Square';
$_['text_sandbox_access_token_label']                   = 'Token de Acceso a Sandbox';
$_['text_sandbox_access_token_placeholder']             = 'Token de Acceso a Sandbox';
$_['text_sandbox_client_id_help']                       = 'Obtener de la página Administrar aplicación en Square';
$_['text_sandbox_client_id_label']                      = 'Aplicación ID Sandbox';
$_['text_sandbox_client_id_placeholder']                = 'Aplicación ID Sandbox';
$_['text_sandbox_disabled_label']                       = 'Deshabilitado'; 
$_['text_sandbox_enabled']                              = 'Modo Sandbox Habilitado. Las transacciones parecerán realizarse, pero no se realizarán cargos.';
$_['text_sandbox_enabled_label']                        = 'Habilitado'; 
$_['text_sandbox_section_heading']                      = 'Configuraciones Sandbox Square';
$_['text_select_location']                              = 'Seleccionar Ubicación';
$_['text_settings_section_heading']                     = 'Configuraciones Square';
$_['text_squareup']                                     = '<a target="_BLANK" href="https://squareup.com"><img src="view/image/payment/squareup.png" alt="Square" title="Square" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_success']                                      = 'Operación Exitosa: Módulo de Pago Square Modificado.';
$_['text_success_capture']                              = 'Transacción Capturada Exitosamente.';
$_['text_success_refund']                               = 'Transacción Reintegrada Exitosamente.';
$_['text_success_void']                                 = 'Transacción Anulada Exitosamente.';
$_['text_token_expired']                                = 'El Token de Acceso Square ha expirado. <a href="%s">Cliquear aquí</a> para renovarlo.';
$_['text_token_expiry_warning']                         = 'El Token de Acceso Square ha expirado en %s. <a href="%s">Cliquear aquí</a> para renovarlo.';
$_['text_token_revoked']                                = 'El Token de Acceso Square ha expirado o ha sido revocado. <a href="%s">Cliquear aquí</a> para re-autorizar la Aplicación Square.';
$_['text_transaction_statuses']                         = 'Estado de Transacción';
$_['text_view']                                         = 'Ver Más';
$_['text_void']                                         = 'Anular';
$_['text_na']                                           = 'N/A';
$_['text_no_reason_provided']                           = 'Razón no proporcionada.';

// Estados
$_['squareup_status_comment_authorized']                = 'La Transacción de la Tarjeta ha sido autorizada pero aún no capturada.';
$_['squareup_status_comment_captured']                  = 'La Transacción de la Tarjeta ha sido automatizada y capturada (ej., completado).';
$_['squareup_status_comment_voided']                    = 'La Transacción de la Tarjeta ha sido autorizada y anulada (ej., cancelado).   ';
$_['squareup_status_comment_failed']                    = 'La Transacción de la Tarjeta ha fallado.';

// Entry
$_['entry_total']                                       = 'Total';
$_['entry_geo_zone']                                    = 'Zona Geográfica';
$_['entry_sort_order']                                  = 'Orden';
$_['entry_merchant']                                    = 'Comercio ID';
$_['entry_transaction_id']                              = 'Transacción ID';
$_['entry_order_id']                                    = 'Pedido ID';
$_['entry_partner_solution_id']                         = 'Socio Solución ID';
$_['entry_type']                                        = 'Tipo de Transacción';
$_['entry_currency']                                    = 'Moneda';
$_['entry_amount']                                      = 'Monto';
$_['entry_browser']                                     = 'Usuario Agente de Cliente';
$_['entry_ip']                                          = 'IP de Cliente';
$_['entry_date_created']                                = 'Fecha Creado';
$_['entry_billing_address_company']                     = 'Empresa de Facturación';
$_['entry_billing_address_street']                      = 'Calle de Facturación';
$_['entry_billing_address_city']                        = 'Ciudad de Facturación';
$_['entry_billing_address_postcode']                    = 'ZIP de Facturación';
$_['entry_billing_address_province']                    = 'Provincia/Estado de Facturación';
$_['entry_billing_address_country']                     = 'País de Facturación';
$_['entry_status_authorized']                           = 'Autorizado';
$_['entry_status_captured']                             = 'Capturado';
$_['entry_status_voided']                               = 'Anulado';
$_['entry_status_failed']                               = 'Fallido';
$_['entry_setup_confirmation']                          = 'Confirmación de Configuración:';

// Error
$_['error_permission']                                  = '<strong>Error:</strong> Sin permiso para modificar Pagos Square.';
$_['error_permission_recurring']                        = '<strong>Error:</strong> Sin permiso para modificar Pagos Recurrentes.';
$_['error_transaction_missing']                         = 'Transacción no Encontrada.';
$_['error_no_ssl']                                      = '<strong>Error:</strong> SSL no está habilitado en el Panel de Administración. Habilitar para finalizar la Configuración.';
$_['error_user_rejected_connect_attempt']               = 'Conexión Cancelada por el Usuario.';
$_['error_possible_xss']                                = 'Se detectó un posible ataque entre sitios y se finalizo el intento de conexión. Verificar el ID y Secret de la Aplicación e intentar nuevamente.';
$_['error_invalid_email']                               = 'Email Inválido.';
$_['error_cron_acknowledge']                            = 'Confirmar que se ha configurado el CRON.';
$_['error_client_id']                                   = 'ID de Aplicación de Cliente Obligatorio.';
$_['error_client_secret']                               = 'Secret de Aplicación de Cliente Obligatoria.';
$_['error_sandbox_client_id']                           = 'ID de Cliente de Sandbox Obligatorio cuando el Modo Sandox está Habilitado.';
$_['error_sandbox_token']                               = 'Token de Sandbox Obligatorio cuando el Modo Sandbox está Habilitado.';
$_['error_no_location_selected']                        = 'Ubicación Obligatoria.';
$_['error_refresh_access_token']                        = "Se produjo un error al intentar actualizar la conexión de la extensión a la cuenta de Square. Verificar las Credenciales de la Aplicación e intentar nuevamente.";
$_['error_form']                                        = 'Verificar Formulario.';
$_['error_token']                                       = 'Error al Refrescar el Token: %s';
$_['error_no_refund']                                   = 'Reembolso Fallido.';

// Columna
$_['column_transaction_id']                             = 'Transacción ID';
$_['column_order_id']                                   = 'Pedido ID';
$_['column_customer']                                   = 'Cliente';
$_['column_status']                                     = 'Estado';
$_['column_type']                                       = 'Tipo';
$_['column_amount']                                     = 'Monto';
$_['column_ip']                                         = 'IP';
$_['column_date_created']                               = 'Fecha Creado';
$_['column_action']                                     = 'Acción';
$_['column_refunds']                                    = 'Reintegros';
$_['column_reason']                                     = 'Razón';
$_['column_fee']                                        = 'Cuota de Procesamiento';

// Button
$_['button_void']                                       = 'Anular';
$_['button_refund']                                     = 'Reembolso';
$_['button_capture']                                    = 'Capturar';
$_['button_connect']                                    = 'Conectar';
$_['button_reconnect']                                  = 'Reconectar';
$_['button_refresh']                                    = 'Refrescar token';