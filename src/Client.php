<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Ldc;

use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AntChain\Ldc\Models\AddAntvipDomainRequest;
use AntChain\Ldc\Models\AddAntvipDomainResponse;
use AntChain\Ldc\Models\AddContainerserviceMiddlewareconfigRequest;
use AntChain\Ldc\Models\AddContainerserviceMiddlewareconfigResponse;
use AntChain\Ldc\Models\AddFlowElasticruleRequest;
use AntChain\Ldc\Models\AddFlowElasticruleResponse;
use AntChain\Ldc\Models\AddFlowElasticsubruleRequest;
use AntChain\Ldc\Models\AddFlowElasticsubruleResponse;
use AntChain\Ldc\Models\AddSidecaropsTemplateRequest;
use AntChain\Ldc\Models\AddSidecaropsTemplateResponse;
use AntChain\Ldc\Models\ApplyContainerserviceDeploymentRequest;
use AntChain\Ldc\Models\ApplyContainerserviceDeploymentResponse;
use AntChain\Ldc\Models\BatchdeleteFedspannerclusterRequest;
use AntChain\Ldc\Models\BatchdeleteFedspannerclusterResponse;
use AntChain\Ldc\Models\BatchdeleteFlowElasticruleRequest;
use AntChain\Ldc\Models\BatchdeleteFlowElasticruleResponse;
use AntChain\Ldc\Models\BindAppserviceRequest;
use AntChain\Ldc\Models\BindAppserviceResponse;
use AntChain\Ldc\Models\CancelAppopsRequest;
use AntChain\Ldc\Models\CancelAppopsResponse;
use AntChain\Ldc\Models\CancelOpsplanServiceRequest;
use AntChain\Ldc\Models\CancelOpsplanServiceResponse;
use AntChain\Ldc\Models\CancelSidecarOperationRequest;
use AntChain\Ldc\Models\CancelSidecarOperationResponse;
use AntChain\Ldc\Models\ConfirmOpsplanServicerollbackRequest;
use AntChain\Ldc\Models\ConfirmOpsplanServicerollbackResponse;
use AntChain\Ldc\Models\CountContainerserviceCellreplicasRequest;
use AntChain\Ldc\Models\CountContainerserviceCellreplicasResponse;
use AntChain\Ldc\Models\CreateAppopsRequest;
use AntChain\Ldc\Models\CreateAppopsResponse;
use AntChain\Ldc\Models\CreateBuildpackNativetechstackversionRequest;
use AntChain\Ldc\Models\CreateBuildpackNativetechstackversionResponse;
use AntChain\Ldc\Models\CreateCellgroupRequest;
use AntChain\Ldc\Models\CreateCellgroupResponse;
use AntChain\Ldc\Models\CreateCellRequest;
use AntChain\Ldc\Models\CreateCellResponse;
use AntChain\Ldc\Models\CreateClusterNamespaceRequest;
use AntChain\Ldc\Models\CreateClusterNamespaceResponse;
use AntChain\Ldc\Models\CreateContainerserviceDeploymentRequest;
use AntChain\Ldc\Models\CreateContainerserviceDeploymentResponse;
use AntChain\Ldc\Models\CreateContainerserviceOperationRequest;
use AntChain\Ldc\Models\CreateContainerserviceOperationResponse;
use AntChain\Ldc\Models\CreateContainerserviceRequest;
use AntChain\Ldc\Models\CreateContainerserviceResponse;
use AntChain\Ldc\Models\CreateDbflowObtenantRequest;
use AntChain\Ldc\Models\CreateDbflowObtenantResponse;
use AntChain\Ldc\Models\CreateDeploymentTemplateRequest;
use AntChain\Ldc\Models\CreateDeploymentTemplateResponse;
use AntChain\Ldc\Models\CreateFederationConfigmapRequest;
use AntChain\Ldc\Models\CreateFederationConfigmapResponse;
use AntChain\Ldc\Models\CreateFederationDeploymentRequest;
use AntChain\Ldc\Models\CreateFederationDeploymentResponse;
use AntChain\Ldc\Models\CreateFederationImagepullsecretRequest;
use AntChain\Ldc\Models\CreateFederationImagepullsecretResponse;
use AntChain\Ldc\Models\CreateFederationNamespaceRequest;
use AntChain\Ldc\Models\CreateFederationNamespaceResponse;
use AntChain\Ldc\Models\CreateFederationSecretRequest;
use AntChain\Ldc\Models\CreateFederationSecretResponse;
use AntChain\Ldc\Models\CreateFedloadbalancerRequest;
use AntChain\Ldc\Models\CreateFedloadbalancerResponse;
use AntChain\Ldc\Models\CreateFedspannerclusterRequest;
use AntChain\Ldc\Models\CreateFedspannerclusterResponse;
use AntChain\Ldc\Models\CreateFlowElasticsceneRequest;
use AntChain\Ldc\Models\CreateFlowElasticsceneResponse;
use AntChain\Ldc\Models\CreateFlowSitecellRequest;
use AntChain\Ldc\Models\CreateFlowSitecellResponse;
use AntChain\Ldc\Models\CreateFlowSiteRequest;
use AntChain\Ldc\Models\CreateFlowSiteResponse;
use AntChain\Ldc\Models\CreateGpaasReleaseRequest;
use AntChain\Ldc\Models\CreateGpaasReleaseResponse;
use AntChain\Ldc\Models\CreateOamserviceApplicationconfigurationRequest;
use AntChain\Ldc\Models\CreateOamserviceApplicationconfigurationResponse;
use AntChain\Ldc\Models\CreateOpsplanPodofflineRequest;
use AntChain\Ldc\Models\CreateOpsplanPodofflineResponse;
use AntChain\Ldc\Models\CreateOpsplanRestartRequest;
use AntChain\Ldc\Models\CreateOpsplanRestartResponse;
use AntChain\Ldc\Models\CreateReleaseplanRequest;
use AntChain\Ldc\Models\CreateReleaseplanResponse;
use AntChain\Ldc\Models\CreateSidecarOperationRequest;
use AntChain\Ldc\Models\CreateSidecarOperationResponse;
use AntChain\Ldc\Models\CreateSpannerClusterRequest;
use AntChain\Ldc\Models\CreateSpannerClusterResponse;
use AntChain\Ldc\Models\CreateUnifiedaccessinstanceRequest;
use AntChain\Ldc\Models\CreateUnifiedaccessinstanceResponse;
use AntChain\Ldc\Models\DeleteAntvipDomainRequest;
use AntChain\Ldc\Models\DeleteAntvipDomainResponse;
use AntChain\Ldc\Models\DeleteCellgroupRequest;
use AntChain\Ldc\Models\DeleteCellgroupResponse;
use AntChain\Ldc\Models\DeleteCellRequest;
use AntChain\Ldc\Models\DeleteCellResponse;
use AntChain\Ldc\Models\DeleteClusterNamespaceRequest;
use AntChain\Ldc\Models\DeleteClusterNamespaceResponse;
use AntChain\Ldc\Models\DeleteContainerserviceRequest;
use AntChain\Ldc\Models\DeleteContainerserviceResponse;
use AntChain\Ldc\Models\DeleteContainerserviceRevisionRequest;
use AntChain\Ldc\Models\DeleteContainerserviceRevisionResponse;
use AntChain\Ldc\Models\DeleteDbflowObtenantRequest;
use AntChain\Ldc\Models\DeleteDbflowObtenantResponse;
use AntChain\Ldc\Models\DeleteDeploymentTemplateRequest;
use AntChain\Ldc\Models\DeleteDeploymentTemplateResponse;
use AntChain\Ldc\Models\DeleteFederationConfigmapRequest;
use AntChain\Ldc\Models\DeleteFederationConfigmapResponse;
use AntChain\Ldc\Models\DeleteFederationDeploymentRequest;
use AntChain\Ldc\Models\DeleteFederationDeploymentResponse;
use AntChain\Ldc\Models\DeleteFederationNamespaceRequest;
use AntChain\Ldc\Models\DeleteFederationNamespaceResponse;
use AntChain\Ldc\Models\DeleteFederationSecretRequest;
use AntChain\Ldc\Models\DeleteFederationSecretResponse;
use AntChain\Ldc\Models\DeleteFedloadbalancerRequest;
use AntChain\Ldc\Models\DeleteFedloadbalancerResponse;
use AntChain\Ldc\Models\DeleteFedspannerclusterRequest;
use AntChain\Ldc\Models\DeleteFedspannerclusterResponse;
use AntChain\Ldc\Models\DeleteFlowElasticruleRequest;
use AntChain\Ldc\Models\DeleteFlowElasticruleResponse;
use AntChain\Ldc\Models\DeleteFlowElasticsceneRequest;
use AntChain\Ldc\Models\DeleteFlowElasticsceneResponse;
use AntChain\Ldc\Models\DeleteFlowElasticsubruleRequest;
use AntChain\Ldc\Models\DeleteFlowElasticsubruleResponse;
use AntChain\Ldc\Models\DeleteFlowEnvrelRequest;
use AntChain\Ldc\Models\DeleteFlowEnvrelResponse;
use AntChain\Ldc\Models\DeleteFlowSitecellRequest;
use AntChain\Ldc\Models\DeleteFlowSitecellResponse;
use AntChain\Ldc\Models\DeleteFlowSiteRequest;
use AntChain\Ldc\Models\DeleteFlowSiteResponse;
use AntChain\Ldc\Models\DeletePodRequest;
use AntChain\Ldc\Models\DeletePodResponse;
use AntChain\Ldc\Models\DeleteUnifiedaccessinstanceRequest;
use AntChain\Ldc\Models\DeleteUnifiedaccessinstanceResponse;
use AntChain\Ldc\Models\DescribeContainerserviceRevisionRequest;
use AntChain\Ldc\Models\DescribeContainerserviceRevisionResponse;
use AntChain\Ldc\Models\DetailAppMetainfoRequest;
use AntChain\Ldc\Models\DetailAppMetainfoResponse;
use AntChain\Ldc\Models\DisableFlowElasticuidRequest;
use AntChain\Ldc\Models\DisableFlowElasticuidResponse;
use AntChain\Ldc\Models\DisableFlowElasticvalueRequest;
use AntChain\Ldc\Models\DisableFlowElasticvalueResponse;
use AntChain\Ldc\Models\EnableFlowElasticuidRequest;
use AntChain\Ldc\Models\EnableFlowElasticuidResponse;
use AntChain\Ldc\Models\ExecContainerserviceApihookRequest;
use AntChain\Ldc\Models\ExecContainerserviceApihookResponse;
use AntChain\Ldc\Models\ExecOpsplanAppopstaskRequest;
use AntChain\Ldc\Models\ExecOpsplanAppopstaskResponse;
use AntChain\Ldc\Models\ExecUnireleasePipelinesRequest;
use AntChain\Ldc\Models\ExecUnireleasePipelinesResponse;
use AntChain\Ldc\Models\ExecUnireleasespiRequest;
use AntChain\Ldc\Models\ExecUnireleasespiResponse;
use AntChain\Ldc\Models\ExistContainerserviceRequest;
use AntChain\Ldc\Models\ExistContainerserviceResponse;
use AntChain\Ldc\Models\ExportFlowRuleRequest;
use AntChain\Ldc\Models\ExportFlowRuleResponse;
use AntChain\Ldc\Models\ExportOpsplanStagesRequest;
use AntChain\Ldc\Models\ExportOpsplanStagesResponse;
use AntChain\Ldc\Models\FinishSidecaropsRequest;
use AntChain\Ldc\Models\FinishSidecaropsResponse;
use AntChain\Ldc\Models\GetAppopsApplicationRequest;
use AntChain\Ldc\Models\GetAppopsApplicationResponse;
use AntChain\Ldc\Models\GetAppopsRequest;
use AntChain\Ldc\Models\GetAppopsResponse;
use AntChain\Ldc\Models\GetCellgroupRequest;
use AntChain\Ldc\Models\GetCellgroupResponse;
use AntChain\Ldc\Models\GetCellRequest;
use AntChain\Ldc\Models\GetCellResponse;
use AntChain\Ldc\Models\GetCloudconfigRequest;
use AntChain\Ldc\Models\GetCloudconfigResponse;
use AntChain\Ldc\Models\GetClusterBasicinfoRequest;
use AntChain\Ldc\Models\GetClusterBasicinfoResponse;
use AntChain\Ldc\Models\GetClusterNodeinfoRequest;
use AntChain\Ldc\Models\GetClusterNodeinfoResponse;
use AntChain\Ldc\Models\GetClusterOverviewinfoRequest;
use AntChain\Ldc\Models\GetClusterOverviewinfoResponse;
use AntChain\Ldc\Models\GetClusterPodoverviewRequest;
use AntChain\Ldc\Models\GetClusterPodoverviewResponse;
use AntChain\Ldc\Models\GetContainerserviceRevisionRequest;
use AntChain\Ldc\Models\GetContainerserviceRevisionResponse;
use AntChain\Ldc\Models\GetDeploymentApplicationRequest;
use AntChain\Ldc\Models\GetDeploymentApplicationResponse;
use AntChain\Ldc\Models\GetDeploymentRequest;
use AntChain\Ldc\Models\GetDeploymentResponse;
use AntChain\Ldc\Models\GetDeploymentRollbackRequest;
use AntChain\Ldc\Models\GetDeploymentRollbackResponse;
use AntChain\Ldc\Models\GetFederationConfigmapRequest;
use AntChain\Ldc\Models\GetFederationConfigmapResponse;
use AntChain\Ldc\Models\GetFederationDeploymentRequest;
use AntChain\Ldc\Models\GetFederationDeploymentResponse;
use AntChain\Ldc\Models\GetFederationNamespaceRequest;
use AntChain\Ldc\Models\GetFederationNamespaceResponse;
use AntChain\Ldc\Models\GetFederationSecretRequest;
use AntChain\Ldc\Models\GetFederationSecretResponse;
use AntChain\Ldc\Models\GetFedloadbalancerRequest;
use AntChain\Ldc\Models\GetFedloadbalancerResponse;
use AntChain\Ldc\Models\GetFedspannerclusterRequest;
use AntChain\Ldc\Models\GetFedspannerclusterResponse;
use AntChain\Ldc\Models\GetOpsplanBluedetailRequest;
use AntChain\Ldc\Models\GetOpsplanBluedetailResponse;
use AntChain\Ldc\Models\GetOpsplanServiceRequest;
use AntChain\Ldc\Models\GetOpsplanServiceResponse;
use AntChain\Ldc\Models\GetSidecarTemplateRequest;
use AntChain\Ldc\Models\GetSidecarTemplateResponse;
use AntChain\Ldc\Models\GetSlsProjectnameRequest;
use AntChain\Ldc\Models\GetSlsProjectnameResponse;
use AntChain\Ldc\Models\GetSpannerClusterRequest;
use AntChain\Ldc\Models\GetSpannerClusterResponse;
use AntChain\Ldc\Models\GetUnifiedaccessinstanceRequest;
use AntChain\Ldc\Models\GetUnifiedaccessinstanceResponse;
use AntChain\Ldc\Models\GetUnireleasePipelineRequest;
use AntChain\Ldc\Models\GetUnireleasePipelineResponse;
use AntChain\Ldc\Models\GetUnireleaseSolutionfileRequest;
use AntChain\Ldc\Models\GetUnireleaseSolutionfileResponse;
use AntChain\Ldc\Models\GetUnireleaseSolutionRequest;
use AntChain\Ldc\Models\GetUnireleaseSolutionResponse;
use AntChain\Ldc\Models\GetUnireleaseTenantsRequest;
use AntChain\Ldc\Models\GetUnireleaseTenantsResponse;
use AntChain\Ldc\Models\GetWorkspacegroupTopologyRequest;
use AntChain\Ldc\Models\GetWorkspacegroupTopologyResponse;
use AntChain\Ldc\Models\ImportUnireleaseSolutionRequest;
use AntChain\Ldc\Models\ImportUnireleaseSolutionResponse;
use AntChain\Ldc\Models\InitMulticlusterClusterRequest;
use AntChain\Ldc\Models\InitMulticlusterClusterResponse;
use AntChain\Ldc\Models\InitSidecaropsRequest;
use AntChain\Ldc\Models\InitSidecaropsResponse;
use AntChain\Ldc\Models\ListCellgroupRequest;
use AntChain\Ldc\Models\ListCellgroupResponse;
use AntChain\Ldc\Models\ListCellRequest;
use AntChain\Ldc\Models\ListCellResponse;
use AntChain\Ldc\Models\ListCertificatesRequest;
use AntChain\Ldc\Models\ListCertificatesResponse;
use AntChain\Ldc\Models\ListCloudconfigHistoryRequest;
use AntChain\Ldc\Models\ListCloudconfigHistoryResponse;
use AntChain\Ldc\Models\ListClusterInfoRequest;
use AntChain\Ldc\Models\ListClusterInfoResponse;
use AntChain\Ldc\Models\ListClusterNamespaceRequest;
use AntChain\Ldc\Models\ListClusterNamespaceResponse;
use AntChain\Ldc\Models\ListClusterNodeeventRequest;
use AntChain\Ldc\Models\ListClusterNodeeventResponse;
use AntChain\Ldc\Models\ListClusterNodeinfoRequest;
use AntChain\Ldc\Models\ListClusterNodeinfoResponse;
use AntChain\Ldc\Models\ListClusterNodepodRequest;
use AntChain\Ldc\Models\ListClusterNodepodResponse;
use AntChain\Ldc\Models\ListClusterOverviewRequest;
use AntChain\Ldc\Models\ListClusterOverviewResponse;
use AntChain\Ldc\Models\ListContainerserviceIngressRequest;
use AntChain\Ldc\Models\ListContainerserviceIngressResponse;
use AntChain\Ldc\Models\ListContainerserviceKubeeventsRequest;
use AntChain\Ldc\Models\ListContainerserviceKubeeventsResponse;
use AntChain\Ldc\Models\ListContainerservicePodRequest;
use AntChain\Ldc\Models\ListContainerservicePodResponse;
use AntChain\Ldc\Models\ListContainerserviceServiceRequest;
use AntChain\Ldc\Models\ListContainerserviceServiceResponse;
use AntChain\Ldc\Models\ListDeploymentTemplateRequest;
use AntChain\Ldc\Models\ListDeploymentTemplateResponse;
use AntChain\Ldc\Models\ListEmergencyPlansRequest;
use AntChain\Ldc\Models\ListEmergencyPlansResponse;
use AntChain\Ldc\Models\ListEventsRequest;
use AntChain\Ldc\Models\ListEventsResponse;
use AntChain\Ldc\Models\ListFederationConfigmapRequest;
use AntChain\Ldc\Models\ListFederationConfigmapResponse;
use AntChain\Ldc\Models\ListFederationDeploymentRequest;
use AntChain\Ldc\Models\ListFederationDeploymentResponse;
use AntChain\Ldc\Models\ListFederationNamespaceRequest;
use AntChain\Ldc\Models\ListFederationNamespaceResponse;
use AntChain\Ldc\Models\ListFederationSecretRequest;
use AntChain\Ldc\Models\ListFederationSecretResponse;
use AntChain\Ldc\Models\ListFedloadbalancerRequest;
use AntChain\Ldc\Models\ListFedloadbalancerResponse;
use AntChain\Ldc\Models\ListFedspannerclusterRequest;
use AntChain\Ldc\Models\ListFedspannerclusterResponse;
use AntChain\Ldc\Models\ListIngressTrafficweightRequest;
use AntChain\Ldc\Models\ListIngressTrafficweightResponse;
use AntChain\Ldc\Models\ListKubernetesResourcesRequest;
use AntChain\Ldc\Models\ListKubernetesResourcesResponse;
use AntChain\Ldc\Models\ListLoadbalancerRequest;
use AntChain\Ldc\Models\ListLoadbalancerResponse;
use AntChain\Ldc\Models\ListMulticlusterEventsRequest;
use AntChain\Ldc\Models\ListMulticlusterEventsResponse;
use AntChain\Ldc\Models\ListMulticlusterMasterclusterRequest;
use AntChain\Ldc\Models\ListMulticlusterMasterclusterResponse;
use AntChain\Ldc\Models\ListMulticlusterRequest;
use AntChain\Ldc\Models\ListMulticlusterResponse;
use AntChain\Ldc\Models\ListMulticlusterZoneRequest;
use AntChain\Ldc\Models\ListMulticlusterZoneResponse;
use AntChain\Ldc\Models\ListPodContainersRequest;
use AntChain\Ldc\Models\ListPodContainersResponse;
use AntChain\Ldc\Models\ListPodEventsRequest;
use AntChain\Ldc\Models\ListPodEventsResponse;
use AntChain\Ldc\Models\ListRegionRequest;
use AntChain\Ldc\Models\ListRegionResponse;
use AntChain\Ldc\Models\ListSidecaropsTemplateRequest;
use AntChain\Ldc\Models\ListSidecaropsTemplateResponse;
use AntChain\Ldc\Models\ListSidecarRequest;
use AntChain\Ldc\Models\ListSidecarResponse;
use AntChain\Ldc\Models\ListSidecarTemplateRequest;
use AntChain\Ldc\Models\ListSidecarTemplateResponse;
use AntChain\Ldc\Models\ListSystemSwitchRequest;
use AntChain\Ldc\Models\ListSystemSwitchResponse;
use AntChain\Ldc\Models\ListSystemUrlRequest;
use AntChain\Ldc\Models\ListSystemUrlResponse;
use AntChain\Ldc\Models\ListUnireleaseSolutionsRequest;
use AntChain\Ldc\Models\ListUnireleaseSolutionsResponse;
use AntChain\Ldc\Models\ListWorkspacegroupRegionsRequest;
use AntChain\Ldc\Models\ListWorkspacegroupRegionsResponse;
use AntChain\Ldc\Models\ListZoneRequest;
use AntChain\Ldc\Models\ListZoneResponse;
use AntChain\Ldc\Models\LoadBuildpackDockerfileRequest;
use AntChain\Ldc\Models\LoadBuildpackDockerfileResponse;
use AntChain\Ldc\Models\LoadContainerserviceDockerfileRequest;
use AntChain\Ldc\Models\LoadContainerserviceDockerfileResponse;
use AntChain\Ldc\Models\PushFlowRouteclientRequest;
use AntChain\Ldc\Models\PushFlowRouteclientResponse;
use AntChain\Ldc\Models\PushFlowRuleRequest;
use AntChain\Ldc\Models\PushFlowRuleResponse;
use AntChain\Ldc\Models\QueryAppPlanRequest;
use AntChain\Ldc\Models\QueryAppPlanResponse;
use AntChain\Ldc\Models\QueryAppServiceRequest;
use AntChain\Ldc\Models\QueryAppServiceResponse;
use AntChain\Ldc\Models\QueryBuildpackNativetechstackversionRequest;
use AntChain\Ldc\Models\QueryBuildpackNativetechstackversionResponse;
use AntChain\Ldc\Models\QueryBuildpackTechstackRequest;
use AntChain\Ldc\Models\QueryBuildpackTechstackResponse;
use AntChain\Ldc\Models\QueryCellRequest;
use AntChain\Ldc\Models\QueryCellResponse;
use AntChain\Ldc\Models\QueryClusterNamespaceRequest;
use AntChain\Ldc\Models\QueryClusterNamespaceResponse;
use AntChain\Ldc\Models\QueryContainerserivceGrayreleaseconfigRequest;
use AntChain\Ldc\Models\QueryContainerserivceGrayreleaseconfigResponse;
use AntChain\Ldc\Models\QueryContainerserviceCellRequest;
use AntChain\Ldc\Models\QueryContainerserviceCellResponse;
use AntChain\Ldc\Models\QueryContainerserviceRequest;
use AntChain\Ldc\Models\QueryContainerserviceResponse;
use AntChain\Ldc\Models\QueryContainerserviceRevisionRequest;
use AntChain\Ldc\Models\QueryContainerserviceRevisionResponse;
use AntChain\Ldc\Models\QueryDbflowObtenantRequest;
use AntChain\Ldc\Models\QueryDbflowObtenantResponse;
use AntChain\Ldc\Models\QueryDeploymentRollbackableRequest;
use AntChain\Ldc\Models\QueryDeploymentRollbackableResponse;
use AntChain\Ldc\Models\QueryFedspannerclusterRequest;
use AntChain\Ldc\Models\QueryFedspannerclusterResponse;
use AntChain\Ldc\Models\QueryFlowElasticruleRequest;
use AntChain\Ldc\Models\QueryFlowElasticruleResponse;
use AntChain\Ldc\Models\QueryFlowElasticsceneRequest;
use AntChain\Ldc\Models\QueryFlowElasticsceneResponse;
use AntChain\Ldc\Models\QueryFlowElasticsubruleRequest;
use AntChain\Ldc\Models\QueryFlowElasticsubruleResponse;
use AntChain\Ldc\Models\QueryFlowElasticvalueRequest;
use AntChain\Ldc\Models\QueryFlowElasticvalueResponse;
use AntChain\Ldc\Models\QueryFlowEnvrelRequest;
use AntChain\Ldc\Models\QueryFlowEnvrelResponse;
use AntChain\Ldc\Models\QueryFlowRecordRequest;
use AntChain\Ldc\Models\QueryFlowRecordResponse;
use AntChain\Ldc\Models\QueryFlowRuleRequest;
use AntChain\Ldc\Models\QueryFlowRuleResponse;
use AntChain\Ldc\Models\QueryFlowSitecellRequest;
use AntChain\Ldc\Models\QueryFlowSitecellResponse;
use AntChain\Ldc\Models\QueryFlowSiteRequest;
use AntChain\Ldc\Models\QueryFlowSiteResponse;
use AntChain\Ldc\Models\QueryFlowUidinfoRequest;
use AntChain\Ldc\Models\QueryFlowUidinfoResponse;
use AntChain\Ldc\Models\QueryLoadbalancerRequest;
use AntChain\Ldc\Models\QueryLoadbalancerResponse;
use AntChain\Ldc\Models\QueryOpsplanAppprogressRequest;
use AntChain\Ldc\Models\QueryOpsplanAppprogressResponse;
use AntChain\Ldc\Models\QueryOpsplanDetailRequest;
use AntChain\Ldc\Models\QueryOpsplanDetailResponse;
use AntChain\Ldc\Models\QueryOpsplanProgressRequest;
use AntChain\Ldc\Models\QueryOpsplanProgressResponse;
use AntChain\Ldc\Models\QueryOpsplanRequest;
use AntChain\Ldc\Models\QueryOpsplanResponse;
use AntChain\Ldc\Models\QueryOpsplanStatesummaryRequest;
use AntChain\Ldc\Models\QueryOpsplanStatesummaryResponse;
use AntChain\Ldc\Models\QueryPodEventRequest;
use AntChain\Ldc\Models\QueryPodEventResponse;
use AntChain\Ldc\Models\QueryPodLogRequest;
use AntChain\Ldc\Models\QueryPodLogResponse;
use AntChain\Ldc\Models\QueryReleasepipelineEventRequest;
use AntChain\Ldc\Models\QueryReleasepipelineEventResponse;
use AntChain\Ldc\Models\QueryReleasepipelinestageEventRequest;
use AntChain\Ldc\Models\QueryReleasepipelinestageEventResponse;
use AntChain\Ldc\Models\QueryServiceProcesslogRequest;
use AntChain\Ldc\Models\QueryServiceProcesslogResponse;
use AntChain\Ldc\Models\QuerySidecarOperationRequest;
use AntChain\Ldc\Models\QuerySidecarOperationResponse;
use AntChain\Ldc\Models\QuerySidecaropsAllservicesRequest;
use AntChain\Ldc\Models\QuerySidecaropsAllservicesResponse;
use AntChain\Ldc\Models\QuerySidecaropsReleaseinfoRequest;
use AntChain\Ldc\Models\QuerySidecaropsReleaseinfoResponse;
use AntChain\Ldc\Models\QuerySidecaropsStateRequest;
use AntChain\Ldc\Models\QuerySidecaropsStateResponse;
use AntChain\Ldc\Models\QuerySpannerClusterRequest;
use AntChain\Ldc\Models\QuerySpannerClusterResponse;
use AntChain\Ldc\Models\QueryUnifiedaccessinstanceRequest;
use AntChain\Ldc\Models\QueryUnifiedaccessinstanceResponse;
use AntChain\Ldc\Models\QueryUnireleaseSolutionfilesRequest;
use AntChain\Ldc\Models\QueryUnireleaseSolutionfilesResponse;
use AntChain\Ldc\Models\RebootSidecaropsRequest;
use AntChain\Ldc\Models\RebootSidecaropsResponse;
use AntChain\Ldc\Models\ReinitAppopsRequest;
use AntChain\Ldc\Models\ReinitAppopsResponse;
use AntChain\Ldc\Models\RetryAppopsRequest;
use AntChain\Ldc\Models\RetryAppopsResponse;
use AntChain\Ldc\Models\RetryOpsplanServiceRequest;
use AntChain\Ldc\Models\RetryOpsplanServiceResponse;
use AntChain\Ldc\Models\RetrySidecarOperationRequest;
use AntChain\Ldc\Models\RetrySidecarOperationResponse;
use AntChain\Ldc\Models\RollbackContainerserviceDeploymentRequest;
use AntChain\Ldc\Models\RollbackContainerserviceDeploymentResponse;
use AntChain\Ldc\Models\RollbackDeploymentApplicationRequest;
use AntChain\Ldc\Models\RollbackDeploymentApplicationResponse;
use AntChain\Ldc\Models\SaveContainerserviceRevisionRequest;
use AntChain\Ldc\Models\SaveContainerserviceRevisionResponse;
use AntChain\Ldc\Models\SaveFlowEnvrelRequest;
use AntChain\Ldc\Models\SaveFlowEnvrelResponse;
use AntChain\Ldc\Models\ScaleSpannerClusterRequest;
use AntChain\Ldc\Models\ScaleSpannerClusterResponse;
use AntChain\Ldc\Models\SetFlowDefaultuidRequest;
use AntChain\Ldc\Models\SetFlowDefaultuidResponse;
use AntChain\Ldc\Models\SetFlowElasticvalueRequest;
use AntChain\Ldc\Models\SetFlowElasticvalueResponse;
use AntChain\Ldc\Models\StartAppopsRequest;
use AntChain\Ldc\Models\StartAppopsResponse;
use AntChain\Ldc\Models\StartOpsplanServiceRequest;
use AntChain\Ldc\Models\StartOpsplanServiceResponse;
use AntChain\Ldc\Models\UnbindAppserviceRequest;
use AntChain\Ldc\Models\UnbindAppserviceResponse;
use AntChain\Ldc\Models\UpdateBuildpackNativetechstackversionRequest;
use AntChain\Ldc\Models\UpdateBuildpackNativetechstackversionResponse;
use AntChain\Ldc\Models\UpdateCellgroupDisasterinfoRequest;
use AntChain\Ldc\Models\UpdateCellgroupDisasterinfoResponse;
use AntChain\Ldc\Models\UpdateCellRequest;
use AntChain\Ldc\Models\UpdateCellResponse;
use AntChain\Ldc\Models\UpdateCloudconfigRequest;
use AntChain\Ldc\Models\UpdateCloudconfigResponse;
use AntChain\Ldc\Models\UpdateContainerserviceCommentRequest;
use AntChain\Ldc\Models\UpdateContainerserviceCommentResponse;
use AntChain\Ldc\Models\UpdateContainerserviceGrayreleaseconfigRequest;
use AntChain\Ldc\Models\UpdateContainerserviceGrayreleaseconfigResponse;
use AntChain\Ldc\Models\UpdateContainerserviceImageRequest;
use AntChain\Ldc\Models\UpdateContainerserviceImageResponse;
use AntChain\Ldc\Models\UpdateContainerserviceNativebpversionRequest;
use AntChain\Ldc\Models\UpdateContainerserviceNativebpversionResponse;
use AntChain\Ldc\Models\UpdateContainerserviceReplicasRequest;
use AntChain\Ldc\Models\UpdateContainerserviceReplicasResponse;
use AntChain\Ldc\Models\UpdateContainerserviceRequest;
use AntChain\Ldc\Models\UpdateContainerserviceResponse;
use AntChain\Ldc\Models\UpdateContainerserviceRevisionRequest;
use AntChain\Ldc\Models\UpdateContainerserviceRevisionResponse;
use AntChain\Ldc\Models\UpdateDbflowObtenantRequest;
use AntChain\Ldc\Models\UpdateDbflowObtenantResponse;
use AntChain\Ldc\Models\UpdateDeploymentTemplateRequest;
use AntChain\Ldc\Models\UpdateDeploymentTemplateResponse;
use AntChain\Ldc\Models\UpdateFederationConfigmapRequest;
use AntChain\Ldc\Models\UpdateFederationConfigmapResponse;
use AntChain\Ldc\Models\UpdateFederationNamespaceRequest;
use AntChain\Ldc\Models\UpdateFederationNamespaceResponse;
use AntChain\Ldc\Models\UpdateFederationSecretRequest;
use AntChain\Ldc\Models\UpdateFederationSecretResponse;
use AntChain\Ldc\Models\UpdateFedloadbalancerRequest;
use AntChain\Ldc\Models\UpdateFedloadbalancerResponse;
use AntChain\Ldc\Models\UpdateFedspannerclusterRequest;
use AntChain\Ldc\Models\UpdateFedspannerclusterResponse;
use AntChain\Ldc\Models\UpdateFedspannerclusterStatusRequest;
use AntChain\Ldc\Models\UpdateFedspannerclusterStatusResponse;
use AntChain\Ldc\Models\UpdateFlowCellweightRequest;
use AntChain\Ldc\Models\UpdateFlowCellweightResponse;
use AntChain\Ldc\Models\UpdateFlowElasticruleRequest;
use AntChain\Ldc\Models\UpdateFlowElasticruleResponse;
use AntChain\Ldc\Models\UpdateFlowElasticrulestatusRequest;
use AntChain\Ldc\Models\UpdateFlowElasticrulestatusResponse;
use AntChain\Ldc\Models\UpdateFlowElasticsceneRequest;
use AntChain\Ldc\Models\UpdateFlowElasticsceneResponse;
use AntChain\Ldc\Models\UpdateFlowSiteRequest;
use AntChain\Ldc\Models\UpdateFlowSiteResponse;
use AntChain\Ldc\Models\UpdateFlowUidrangeRequest;
use AntChain\Ldc\Models\UpdateFlowUidrangeResponse;
use AntChain\Ldc\Models\UpdateIngressTrafficweightRequest;
use AntChain\Ldc\Models\UpdateIngressTrafficweightResponse;
use AntChain\Ldc\Models\UpdateServiceRequest;
use AntChain\Ldc\Models\UpdateServiceResponse;
use AntChain\Ldc\Models\UpdateSidecaropsConsistencyRequest;
use AntChain\Ldc\Models\UpdateSidecaropsConsistencyResponse;
use AntChain\Ldc\Models\UpdateSidecaropsRequest;
use AntChain\Ldc\Models\UpdateSidecaropsResponse;
use AntChain\Ldc\Models\UpdateSidecaropsTemplateRequest;
use AntChain\Ldc\Models\UpdateSidecaropsTemplateResponse;
use AntChain\Ldc\Models\UpdateSpannerClusterstatusRequest;
use AntChain\Ldc\Models\UpdateSpannerClusterstatusResponse;
use AntChain\Ldc\Models\UpdateSpannerUnitstatusRequest;
use AntChain\Ldc\Models\UpdateSpannerUnitstatusResponse;
use AntChain\Ldc\Models\UpdateUnifiedaccessinstanceRequest;
use AntChain\Ldc\Models\UpdateUnifiedaccessinstanceResponse;
use AntChain\Util\UtilClient;
use Exception;

class Client
{
    protected $_endpoint;

    protected $_regionId;

    protected $_accessKeyId;

    protected $_accessKeySecret;

    protected $_protocol;

    protected $_userAgent;

    protected $_readTimeout;

    protected $_connectTimeout;

    protected $_httpProxy;

    protected $_httpsProxy;

    protected $_socks5Proxy;

    protected $_socks5NetWork;

    protected $_noProxy;

    protected $_maxIdleConns;

    protected $_securityToken;

    protected $_maxIdleTimeMillis;

    protected $_keepAliveDurationMillis;

    protected $_maxRequests;

    protected $_maxRequestsPerHost;

    /**
     * Init client with Config.
     *
     * @param config config contains the necessary information to create a client
     * @param mixed $config
     */
    public function __construct($config)
    {
        if (Utils::isUnset($config)) {
            throw new TeaError([
                'code'    => 'ParameterMissing',
                'message' => "'config' can not be unset",
            ]);
        }
        $this->_accessKeyId             = $config->accessKeyId;
        $this->_accessKeySecret         = $config->accessKeySecret;
        $this->_securityToken           = $config->securityToken;
        $this->_endpoint                = $config->endpoint;
        $this->_protocol                = $config->protocol;
        $this->_userAgent               = $config->userAgent;
        $this->_readTimeout             = Utils::defaultNumber($config->readTimeout, 20000);
        $this->_connectTimeout          = Utils::defaultNumber($config->connectTimeout, 20000);
        $this->_httpProxy               = $config->httpProxy;
        $this->_httpsProxy              = $config->httpsProxy;
        $this->_noProxy                 = $config->noProxy;
        $this->_socks5Proxy             = $config->socks5Proxy;
        $this->_socks5NetWork           = $config->socks5NetWork;
        $this->_maxIdleConns            = Utils::defaultNumber($config->maxIdleConns, 60000);
        $this->_maxIdleTimeMillis       = Utils::defaultNumber($config->maxIdleTimeMillis, 5);
        $this->_keepAliveDurationMillis = Utils::defaultNumber($config->keepAliveDurationMillis, 5000);
        $this->_maxRequests             = Utils::defaultNumber($config->maxRequests, 100);
        $this->_maxRequestsPerHost      = Utils::defaultNumber($config->maxRequestsPerHost, 100);
    }

    /**
     * Encapsulate the request and invoke the network.
     *
     * @param string         $version
     * @param string         $action   api name
     * @param string         $protocol http or https
     * @param string         $method   e.g. GET
     * @param string         $pathname pathname of every api
     * @param mixed[]        $request  which contains request params
     * @param string[]       $headers
     * @param RuntimeOptions $runtime  which controls some details of call api, such as retry times
     *
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     *
     * @return array the response
     */
    public function doRequest($version, $action, $protocol, $method, $pathname, $request, $headers, $runtime)
    {
        $runtime->validate();
        $_runtime = [
            'timeouted'               => 'retry',
            'readTimeout'             => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout'          => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'httpProxy'               => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'              => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'                 => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'maxIdleConns'            => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'maxIdleTimeMillis'       => $this->_maxIdleTimeMillis,
            'keepAliveDurationMillis' => $this->_keepAliveDurationMillis,
            'maxRequests'             => $this->_maxRequests,
            'maxRequestsPerHost'      => $this->_maxRequestsPerHost,
            'retry'                   => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
            // label selector requirement struct
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry(@$_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method   = $method;
                $_request->pathname = $pathname;
                $_request->query    = [
                    'method'           => $action,
                    'version'          => $version,
                    'sign_type'        => 'HmacSHA1',
                    'req_time'         => UtilClient::getTimestamp(),
                    'req_msg_id'       => UtilClient::getNonce(),
                    'access_key'       => $this->_accessKeyId,
                    'base_sdk_version' => 'TeaSDK-2.0',
                    'sdk_version'      => '1.12.15',
                ];
                if (!Utils::empty_($this->_securityToken)) {
                    $_request->query['security_token'] = $this->_securityToken;
                }
                $_request->headers = Tea::merge([
                    'host'       => Utils::defaultString($this->_endpoint, 'openapi.antchain.antgroup.com'),
                    'user-agent' => Utils::getUserAgent($this->_userAgent),
                ], $headers);
                $tmp                               = Utils::anyifyMapValue(RpcUtils::query($request));
                $_request->body                    = Utils::toFormString($tmp);
                $_request->headers['content-type'] = 'application/x-www-form-urlencoded';
                $signedParam                       = Tea::merge($_request->query, RpcUtils::query($request));
                $_request->query['sign']           = UtilClient::getSignature($signedParam, $this->_accessKeySecret);
                $_lastRequest                      = $_request;
                $_response                         = Tea::send($_request, $_runtime);
                $raw                               = Utils::readAsString($_response->body);
                $obj                               = Utils::parseJSON($raw);
                $res                               = Utils::assertAsMap($obj);
                $resp                              = Utils::assertAsMap(@$res['response']);
                if (UtilClient::hasError($raw, $this->_accessKeySecret)) {
                    throw new TeaError([
                        'message' => @$resp['result_msg'],
                        'data'    => $resp,
                        'code'    => @$resp['result_code'],
                    ]);
                }

                return $resp;
            } catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param BindAppserviceRequest $request
     *
     * @return BindAppserviceResponse
     */
    public function bindAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param BindAppserviceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return BindAppserviceResponse
     */
    public function bindAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return BindAppserviceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appservice.bind', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????????????????????????????.
     *
     * @param UnbindAppserviceRequest $request
     *
     * @return UnbindAppserviceResponse
     */
    public function unbindAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????????????????????????????.
     *
     * @param UnbindAppserviceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UnbindAppserviceResponse
     */
    public function unbindAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UnbindAppserviceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appservice.unbind', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????????????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param CreateAppopsRequest $request
     *
     * @return CreateAppopsResponse
     */
    public function createAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????????????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param CreateAppopsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAppopsResponse
     */
    public function createAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateAppopsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appops.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????????????????
     * Summary: ????????????????????????????????????????????????
     *
     * @param GetAppopsRequest $request
     *
     * @return GetAppopsResponse
     */
    public function getAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????????????????
     * Summary: ????????????????????????????????????????????????
     *
     * @param GetAppopsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetAppopsResponse
     */
    public function getAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetAppopsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appops.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????????????????
     * Summary: ????????????????????????????????????????????????.
     *
     * @param GetAppopsApplicationRequest $request
     *
     * @return GetAppopsApplicationResponse
     */
    public function getAppopsApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppopsApplicationEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????????????????
     * Summary: ????????????????????????????????????????????????.
     *
     * @param GetAppopsApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetAppopsApplicationResponse
     */
    public function getAppopsApplicationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetAppopsApplicationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appops.application.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * Summary: ??????????????????????????????????????????????????????
     *
     * @param StartAppopsRequest $request
     *
     * @return StartAppopsResponse
     */
    public function startAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * Summary: ??????????????????????????????????????????????????????
     *
     * @param StartAppopsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return StartAppopsResponse
     */
    public function startAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return StartAppopsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appops.start', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * Summary: ???????????????????????????????????????????????????
     *
     * @param ReinitAppopsRequest $request
     *
     * @return ReinitAppopsResponse
     */
    public function reinitAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reinitAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * Summary: ???????????????????????????????????????????????????
     *
     * @param ReinitAppopsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ReinitAppopsResponse
     */
    public function reinitAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ReinitAppopsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appops.reinit', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????? ????????????????????????????????????????????????????????? INITED?????????????????? INIT_FAILED??????????????????
     * Summary: ???????????????????????????????????????
     *
     * @param CancelAppopsRequest $request
     *
     * @return CancelAppopsResponse
     */
    public function cancelAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????? ????????????????????????????????????????????????????????? INITED?????????????????? INIT_FAILED??????????????????
     * Summary: ???????????????????????????????????????
     *
     * @param CancelAppopsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CancelAppopsResponse
     */
    public function cancelAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CancelAppopsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appops.cancel', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? - FAILED???????????????
     * Summary: ????????????.
     *
     * @param RetryAppopsRequest $request
     *
     * @return RetryAppopsResponse
     */
    public function retryAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? - FAILED???????????????
     * Summary: ????????????.
     *
     * @param RetryAppopsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RetryAppopsResponse
     */
    public function retryAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RetryAppopsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.appops.retry', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param GetDeploymentRequest $request
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeploymentEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param GetDeploymentRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDeploymentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????????????????
     * Summary: ???????????????????????????????????????.
     *
     * @param GetDeploymentApplicationRequest $request
     *
     * @return GetDeploymentApplicationResponse
     */
    public function getDeploymentApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeploymentApplicationEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????????????????
     * Summary: ???????????????????????????????????????.
     *
     * @param GetDeploymentApplicationRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDeploymentApplicationResponse
     */
    public function getDeploymentApplicationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDeploymentApplicationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.application.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????????????????
     * Summary: ?????????????????????????????????????????????.
     *
     * @param GetDeploymentRollbackRequest $request
     *
     * @return GetDeploymentRollbackResponse
     */
    public function getDeploymentRollback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeploymentRollbackEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????????????????
     * Summary: ?????????????????????????????????????????????.
     *
     * @param GetDeploymentRollbackRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeploymentRollbackResponse
     */
    public function getDeploymentRollbackEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDeploymentRollbackResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.rollback.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryDeploymentRollbackableRequest $request
     *
     * @return QueryDeploymentRollbackableResponse
     */
    public function queryDeploymentRollbackable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDeploymentRollbackableEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryDeploymentRollbackableRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryDeploymentRollbackableResponse
     */
    public function queryDeploymentRollbackableEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeploymentRollbackableResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.rollbackable.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param RollbackDeploymentApplicationRequest $request
     *
     * @return RollbackDeploymentApplicationResponse
     */
    public function rollbackDeploymentApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackDeploymentApplicationEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param RollbackDeploymentApplicationRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return RollbackDeploymentApplicationResponse
     */
    public function rollbackDeploymentApplicationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RollbackDeploymentApplicationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.application.rollback', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????? LDC ????????????
     * Summary: ?????? LDC ????????????.
     *
     * @param PushFlowRouteclientRequest $request
     *
     * @return PushFlowRouteclientResponse
     */
    public function pushFlowRouteclient($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushFlowRouteclientEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????? LDC ????????????
     * Summary: ?????? LDC ????????????.
     *
     * @param PushFlowRouteclientRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return PushFlowRouteclientResponse
     */
    public function pushFlowRouteclientEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PushFlowRouteclientResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.routeclient.push', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: fedNamespace??????
     * Summary: FedNamespace??????.
     *
     * @param CreateFederationNamespaceRequest $request
     *
     * @return CreateFederationNamespaceResponse
     */
    public function createFederationNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFederationNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: fedNamespace??????
     * Summary: FedNamespace??????.
     *
     * @param CreateFederationNamespaceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateFederationNamespaceResponse
     */
    public function createFederationNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFederationNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.namespace.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedNamespace??????API
     * Summary: FedNamespace??????.
     *
     * @param UpdateFederationNamespaceRequest $request
     *
     * @return UpdateFederationNamespaceResponse
     */
    public function updateFederationNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFederationNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: FedNamespace??????API
     * Summary: FedNamespace??????.
     *
     * @param UpdateFederationNamespaceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateFederationNamespaceResponse
     */
    public function updateFederationNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFederationNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.namespace.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????FedNamespace
     * Summary: FedNamespace get.
     *
     * @param GetFederationNamespaceRequest $request
     *
     * @return GetFederationNamespaceResponse
     */
    public function getFederationNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFederationNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????FedNamespace
     * Summary: FedNamespace get.
     *
     * @param GetFederationNamespaceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetFederationNamespaceResponse
     */
    public function getFederationNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetFederationNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.namespace.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedNamespace ??????
     * Summary: FedNamespace ??????.
     *
     * @param DeleteFederationNamespaceRequest $request
     *
     * @return DeleteFederationNamespaceResponse
     */
    public function deleteFederationNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFederationNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: FedNamespace ??????
     * Summary: FedNamespace ??????.
     *
     * @param DeleteFederationNamespaceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteFederationNamespaceResponse
     */
    public function deleteFederationNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFederationNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.namespace.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????FedConfigMap
     * Summary: ??????FedConfigMap.
     *
     * @param CreateFederationConfigmapRequest $request
     *
     * @return CreateFederationConfigmapResponse
     */
    public function createFederationConfigmap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFederationConfigmapEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????FedConfigMap
     * Summary: ??????FedConfigMap.
     *
     * @param CreateFederationConfigmapRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateFederationConfigmapResponse
     */
    public function createFederationConfigmapEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFederationConfigmapResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.configmap.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedConfigMap??????
     * Summary: FedConfigMap??????.
     *
     * @param UpdateFederationConfigmapRequest $request
     *
     * @return UpdateFederationConfigmapResponse
     */
    public function updateFederationConfigmap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFederationConfigmapEx($request, $headers, $runtime);
    }

    /**
     * Description: FedConfigMap??????
     * Summary: FedConfigMap??????.
     *
     * @param UpdateFederationConfigmapRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateFederationConfigmapResponse
     */
    public function updateFederationConfigmapEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFederationConfigmapResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.configmap.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedConfigMap Get
     * Summary: FedConfigMap Get.
     *
     * @param GetFederationConfigmapRequest $request
     *
     * @return GetFederationConfigmapResponse
     */
    public function getFederationConfigmap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFederationConfigmapEx($request, $headers, $runtime);
    }

    /**
     * Description: FedConfigMap Get
     * Summary: FedConfigMap Get.
     *
     * @param GetFederationConfigmapRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetFederationConfigmapResponse
     */
    public function getFederationConfigmapEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetFederationConfigmapResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.configmap.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedConfigMap ??????
     * Summary: FedConfigMap ??????.
     *
     * @param DeleteFederationConfigmapRequest $request
     *
     * @return DeleteFederationConfigmapResponse
     */
    public function deleteFederationConfigmap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFederationConfigmapEx($request, $headers, $runtime);
    }

    /**
     * Description: FedConfigMap ??????
     * Summary: FedConfigMap ??????.
     *
     * @param DeleteFederationConfigmapRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteFederationConfigmapResponse
     */
    public function deleteFederationConfigmapEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFederationConfigmapResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.configmap.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedConfigMap List
     * Summary: FedConfigMap List.
     *
     * @param ListFederationConfigmapRequest $request
     *
     * @return ListFederationConfigmapResponse
     */
    public function listFederationConfigmap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFederationConfigmapEx($request, $headers, $runtime);
    }

    /**
     * Description: FedConfigMap List
     * Summary: FedConfigMap List.
     *
     * @param ListFederationConfigmapRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListFederationConfigmapResponse
     */
    public function listFederationConfigmapEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListFederationConfigmapResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.configmap.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: List FeNamespace
     * Summary: List FeNamespace.
     *
     * @param ListFederationNamespaceRequest $request
     *
     * @return ListFederationNamespaceResponse
     */
    public function listFederationNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFederationNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: List FeNamespace
     * Summary: List FeNamespace.
     *
     * @param ListFederationNamespaceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListFederationNamespaceResponse
     */
    public function listFederationNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListFederationNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.namespace.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????OpenAPI
     * Summary: ????????????????????????
     *
     * @param QueryContainerserviceRequest $request
     *
     * @return QueryContainerserviceResponse
     */
    public function queryContainerservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryContainerserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????OpenAPI
     * Summary: ????????????????????????
     *
     * @param QueryContainerserviceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryContainerserviceResponse
     */
    public function queryContainerserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryContainerserviceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: get master clusters for each zone
     * Summary: getMasterClusters.
     *
     * @param ListMulticlusterMasterclusterRequest $request
     *
     * @return ListMulticlusterMasterclusterResponse
     */
    public function listMulticlusterMastercluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMulticlusterMasterclusterEx($request, $headers, $runtime);
    }

    /**
     * Description: get master clusters for each zone
     * Summary: getMasterClusters.
     *
     * @param ListMulticlusterMasterclusterRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListMulticlusterMasterclusterResponse
     */
    public function listMulticlusterMasterclusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListMulticlusterMasterclusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.multicluster.mastercluster.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: import master clusters
     * Summary: importMasterCluster.
     *
     * @param InitMulticlusterClusterRequest $request
     *
     * @return InitMulticlusterClusterResponse
     */
    public function initMulticlusterCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initMulticlusterClusterEx($request, $headers, $runtime);
    }

    /**
     * Description: import master clusters
     * Summary: importMasterCluster.
     *
     * @param InitMulticlusterClusterRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return InitMulticlusterClusterResponse
     */
    public function initMulticlusterClusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return InitMulticlusterClusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.multicluster.cluster.init', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: list multi clusters
     * Summary: list MultiCluster.
     *
     * @param ListMulticlusterRequest $request
     *
     * @return ListMulticlusterResponse
     */
    public function listMulticluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMulticlusterEx($request, $headers, $runtime);
    }

    /**
     * Description: list multi clusters
     * Summary: list MultiCluster.
     *
     * @param ListMulticlusterRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMulticlusterResponse
     */
    public function listMulticlusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListMulticlusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.multicluster.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????
     *
     * @param DeleteContainerserviceRequest $request
     *
     * @return DeleteContainerserviceResponse
     */
    public function deleteContainerservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteContainerserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????
     *
     * @param DeleteContainerserviceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteContainerserviceResponse
     */
    public function deleteContainerserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteContainerserviceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param CreateContainerserviceDeploymentRequest $request
     *
     * @return CreateContainerserviceDeploymentResponse
     */
    public function createContainerserviceDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createContainerserviceDeploymentEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param CreateContainerserviceDeploymentRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateContainerserviceDeploymentResponse
     */
    public function createContainerserviceDeploymentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateContainerserviceDeploymentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.deployment.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????FedSecret
     * Summary: ??????FedSecret.
     *
     * @param CreateFederationSecretRequest $request
     *
     * @return CreateFederationSecretResponse
     */
    public function createFederationSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFederationSecretEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????FedSecret
     * Summary: ??????FedSecret.
     *
     * @param CreateFederationSecretRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFederationSecretResponse
     */
    public function createFederationSecretEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFederationSecretResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.secret.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedSecret Get
     * Summary: FedSecret Get.
     *
     * @param GetFederationSecretRequest $request
     *
     * @return GetFederationSecretResponse
     */
    public function getFederationSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFederationSecretEx($request, $headers, $runtime);
    }

    /**
     * Description: FedSecret Get
     * Summary: FedSecret Get.
     *
     * @param GetFederationSecretRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetFederationSecretResponse
     */
    public function getFederationSecretEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetFederationSecretResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.secret.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedSecret ??????
     * Summary: FedSecret ??????.
     *
     * @param DeleteFederationSecretRequest $request
     *
     * @return DeleteFederationSecretResponse
     */
    public function deleteFederationSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFederationSecretEx($request, $headers, $runtime);
    }

    /**
     * Description: FedSecret ??????
     * Summary: FedSecret ??????.
     *
     * @param DeleteFederationSecretRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteFederationSecretResponse
     */
    public function deleteFederationSecretEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFederationSecretResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.secret.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedSecret ??????
     * Summary: FedSecret ??????.
     *
     * @param UpdateFederationSecretRequest $request
     *
     * @return UpdateFederationSecretResponse
     */
    public function updateFederationSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFederationSecretEx($request, $headers, $runtime);
    }

    /**
     * Description: FedSecret ??????
     * Summary: FedSecret ??????.
     *
     * @param UpdateFederationSecretRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFederationSecretResponse
     */
    public function updateFederationSecretEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFederationSecretResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.secret.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: FedSecret List
     * Summary: FedSecret List.
     *
     * @param ListFederationSecretRequest $request
     *
     * @return ListFederationSecretResponse
     */
    public function listFederationSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFederationSecretEx($request, $headers, $runtime);
    }

    /**
     * Description: FedSecret List
     * Summary: FedSecret List.
     *
     * @param ListFederationSecretRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListFederationSecretResponse
     */
    public function listFederationSecretEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListFederationSecretResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.secret.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * ???antcloud.ldc.containerservice.revision.query??????????????????????????????????????????????????????
     * Summary: ???????????????????????????????????????.
     *
     * @param DescribeContainerserviceRevisionRequest $request
     *
     * @return DescribeContainerserviceRevisionResponse
     */
    public function describeContainerserviceRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeContainerserviceRevisionEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * ???antcloud.ldc.containerservice.revision.query??????????????????????????????????????????????????????
     * Summary: ???????????????????????????????????????.
     *
     * @param DescribeContainerserviceRevisionRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeContainerserviceRevisionResponse
     */
    public function describeContainerserviceRevisionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DescribeContainerserviceRevisionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.revision.describe', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param GetContainerserviceRevisionRequest $request
     *
     * @return GetContainerserviceRevisionResponse
     */
    public function getContainerserviceRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContainerserviceRevisionEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param GetContainerserviceRevisionRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetContainerserviceRevisionResponse
     */
    public function getContainerserviceRevisionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetContainerserviceRevisionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.revision.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryContainerserviceRevisionRequest $request
     *
     * @return QueryContainerserviceRevisionResponse
     */
    public function queryContainerserviceRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryContainerserviceRevisionEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryContainerserviceRevisionRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryContainerserviceRevisionResponse
     */
    public function queryContainerserviceRevisionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryContainerserviceRevisionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.revision.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param UpdateContainerserviceRevisionRequest $request
     *
     * @return UpdateContainerserviceRevisionResponse
     */
    public function updateContainerserviceRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerserviceRevisionEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param UpdateContainerserviceRevisionRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateContainerserviceRevisionResponse
     */
    public function updateContainerserviceRevisionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerserviceRevisionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.revision.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateContainerserviceImageRequest $request
     *
     * @return UpdateContainerserviceImageResponse
     */
    public function updateContainerserviceImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerserviceImageEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateContainerserviceImageRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateContainerserviceImageResponse
     */
    public function updateContainerserviceImageEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerserviceImageResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.image.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param UpdateContainerserviceReplicasRequest $request
     *
     * @return UpdateContainerserviceReplicasResponse
     */
    public function updateContainerserviceReplicas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerserviceReplicasEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param UpdateContainerserviceReplicasRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateContainerserviceReplicasResponse
     */
    public function updateContainerserviceReplicasEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerserviceReplicasResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.replicas.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ????????????????????????
     *
     * @param CreateContainerserviceRequest $request
     *
     * @return CreateContainerserviceResponse
     */
    public function createContainerservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createContainerserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ????????????????????????
     *
     * @param CreateContainerserviceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateContainerserviceResponse
     */
    public function createContainerserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateContainerserviceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ????????????????????????
     *
     * @param SaveContainerserviceRevisionRequest $request
     *
     * @return SaveContainerserviceRevisionResponse
     */
    public function saveContainerserviceRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveContainerserviceRevisionEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ????????????????????????
     *
     * @param SaveContainerserviceRevisionRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return SaveContainerserviceRevisionResponse
     */
    public function saveContainerserviceRevisionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SaveContainerserviceRevisionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.revision.save', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: container service ??????
     * Summary: container service ??????.
     *
     * @param UpdateContainerserviceRequest $request
     *
     * @return UpdateContainerserviceResponse
     */
    public function updateContainerservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: container service ??????
     * Summary: container service ??????.
     *
     * @param UpdateContainerserviceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateContainerserviceResponse
     */
    public function updateContainerserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerserviceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param ExistContainerserviceRequest $request
     *
     * @return ExistContainerserviceResponse
     */
    public function existContainerservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->existContainerserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param ExistContainerserviceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExistContainerserviceResponse
     */
    public function existContainerserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExistContainerserviceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.exist', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: get cluster basic info by name
     * Summary: getClusterBasicInfo.
     *
     * @param GetClusterBasicinfoRequest $request
     *
     * @return GetClusterBasicinfoResponse
     */
    public function getClusterBasicinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterBasicinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: get cluster basic info by name
     * Summary: getClusterBasicInfo.
     *
     * @param GetClusterBasicinfoRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetClusterBasicinfoResponse
     */
    public function getClusterBasicinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetClusterBasicinfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.basicinfo.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: get cluster overview info
     * Summary: getClusterOverview.
     *
     * @param GetClusterOverviewinfoRequest $request
     *
     * @return GetClusterOverviewinfoResponse
     */
    public function getClusterOverviewinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterOverviewinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: get cluster overview info
     * Summary: getClusterOverview.
     *
     * @param GetClusterOverviewinfoRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetClusterOverviewinfoResponse
     */
    public function getClusterOverviewinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetClusterOverviewinfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.overviewinfo.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ??????????????????.
     *
     * @param QueryCellRequest $request
     *
     * @return QueryCellResponse
     */
    public function queryCell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryCellEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ??????????????????.
     *
     * @param QueryCellRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return QueryCellResponse
     */
    public function queryCellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryCellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cell.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: get pod overview infos of specific cluster
     * Summary: getPodOverviewInfo.
     *
     * @param GetClusterPodoverviewRequest $request
     *
     * @return GetClusterPodoverviewResponse
     */
    public function getClusterPodoverview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterPodoverviewEx($request, $headers, $runtime);
    }

    /**
     * Description: get pod overview infos of specific cluster
     * Summary: getPodOverviewInfo.
     *
     * @param GetClusterPodoverviewRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetClusterPodoverviewResponse
     */
    public function getClusterPodoverviewEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetClusterPodoverviewResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.podoverview.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: list all nodes info of specific cluster
     * Summary: listNodeInfo.
     *
     * @param ListClusterNodeinfoRequest $request
     *
     * @return ListClusterNodeinfoResponse
     */
    public function listClusterNodeinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterNodeinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: list all nodes info of specific cluster
     * Summary: listNodeInfo.
     *
     * @param ListClusterNodeinfoRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListClusterNodeinfoResponse
     */
    public function listClusterNodeinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListClusterNodeinfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.nodeinfo.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: create namespace of a specific cluster
     * Summary: createNamespace.
     *
     * @param CreateClusterNamespaceRequest $request
     *
     * @return CreateClusterNamespaceResponse
     */
    public function createClusterNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: create namespace of a specific cluster
     * Summary: createNamespace.
     *
     * @param CreateClusterNamespaceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateClusterNamespaceResponse
     */
    public function createClusterNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateClusterNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.namespace.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: list namespace
     * Summary: list namespace.
     *
     * @param ListClusterNamespaceRequest $request
     *
     * @return ListClusterNamespaceResponse
     */
    public function listClusterNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: list namespace
     * Summary: list namespace.
     *
     * @param ListClusterNamespaceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterNamespaceResponse
     */
    public function listClusterNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListClusterNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.namespace.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: query namespace detail info
     * Summary: query namespace.
     *
     * @param QueryClusterNamespaceRequest $request
     *
     * @return QueryClusterNamespaceResponse
     */
    public function queryClusterNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryClusterNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: query namespace detail info
     * Summary: query namespace.
     *
     * @param QueryClusterNamespaceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryClusterNamespaceResponse
     */
    public function queryClusterNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryClusterNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.namespace.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: delete namespace of specific cluster
     * Summary: delete namespace.
     *
     * @param DeleteClusterNamespaceRequest $request
     *
     * @return DeleteClusterNamespaceResponse
     */
    public function deleteClusterNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterNamespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: delete namespace of specific cluster
     * Summary: delete namespace.
     *
     * @param DeleteClusterNamespaceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteClusterNamespaceResponse
     */
    public function deleteClusterNamespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteClusterNamespaceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.namespace.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: get node detail info by name
     * Summary: get node detail info.
     *
     * @param GetClusterNodeinfoRequest $request
     *
     * @return GetClusterNodeinfoResponse
     */
    public function getClusterNodeinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterNodeinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: get node detail info by name
     * Summary: get node detail info.
     *
     * @param GetClusterNodeinfoRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetClusterNodeinfoResponse
     */
    public function getClusterNodeinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetClusterNodeinfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.nodeinfo.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ImagePullSecret??????
     * Summary: ImagePullSecret??????.
     *
     * @param CreateFederationImagepullsecretRequest $request
     *
     * @return CreateFederationImagepullsecretResponse
     */
    public function createFederationImagepullsecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFederationImagepullsecretEx($request, $headers, $runtime);
    }

    /**
     * Description: ImagePullSecret??????
     * Summary: ImagePullSecret??????.
     *
     * @param CreateFederationImagepullsecretRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateFederationImagepullsecretResponse
     */
    public function createFederationImagepullsecretEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFederationImagepullsecretResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.imagepullsecret.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: list all pods of specific node
     * Summary: listtPodsOfNode.
     *
     * @param ListClusterNodepodRequest $request
     *
     * @return ListClusterNodepodResponse
     */
    public function listClusterNodepod($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterNodepodEx($request, $headers, $runtime);
    }

    /**
     * Description: list all pods of specific node
     * Summary: listtPodsOfNode.
     *
     * @param ListClusterNodepodRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListClusterNodepodResponse
     */
    public function listClusterNodepodEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListClusterNodepodResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.nodepod.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: list all events of specific node
     * Summary: listEventOfNode.
     *
     * @param ListClusterNodeeventRequest $request
     *
     * @return ListClusterNodeeventResponse
     */
    public function listClusterNodeevent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterNodeeventEx($request, $headers, $runtime);
    }

    /**
     * Description: list all events of specific node
     * Summary: listEventOfNode.
     *
     * @param ListClusterNodeeventRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterNodeeventResponse
     */
    public function listClusterNodeeventEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListClusterNodeeventResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.nodeevent.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param QueryOpsplanRequest $request
     *
     * @return QueryOpsplanResponse
     */
    public function queryOpsplan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOpsplanEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param QueryOpsplanRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryOpsplanResponse
     */
    public function queryOpsplanEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryOpsplanResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????????????????
     * Summary: ???????????????????????????????????????.
     *
     * @param QueryOpsplanStatesummaryRequest $request
     *
     * @return QueryOpsplanStatesummaryResponse
     */
    public function queryOpsplanStatesummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOpsplanStatesummaryEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????????????????
     * Summary: ???????????????????????????????????????.
     *
     * @param QueryOpsplanStatesummaryRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryOpsplanStatesummaryResponse
     */
    public function queryOpsplanStatesummaryEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryOpsplanStatesummaryResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.statesummary.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????/?????????????????????
     * Summary: ??????/?????????????????????.
     *
     * @param QueryOpsplanDetailRequest $request
     *
     * @return QueryOpsplanDetailResponse
     */
    public function queryOpsplanDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOpsplanDetailEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????/?????????????????????
     * Summary: ??????/?????????????????????.
     *
     * @param QueryOpsplanDetailRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryOpsplanDetailResponse
     */
    public function queryOpsplanDetailEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryOpsplanDetailResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.detail.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????SOFA|SOFABOOT????????????????????????????????????????????????????????????????????? MYBANK_SOFA
     * Summary: ??????????????????????????????????????????????????????.
     *
     * @param QueryBuildpackTechstackRequest $request
     *
     * @return QueryBuildpackTechstackResponse
     */
    public function queryBuildpackTechstack($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryBuildpackTechstackEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????SOFA|SOFABOOT????????????????????????????????????????????????????????????????????? MYBANK_SOFA
     * Summary: ??????????????????????????????????????????????????????.
     *
     * @param QueryBuildpackTechstackRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryBuildpackTechstackResponse
     */
    public function queryBuildpackTechstackEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryBuildpackTechstackResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.buildpack.techstack.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * e.g: ce4456_jdk7_tengine, enhanced_ce4456_jdk7_tengine16
     * Summary: ?????????????????????????????????????????????.
     *
     * @param QueryBuildpackNativetechstackversionRequest $request
     *
     * @return QueryBuildpackNativetechstackversionResponse
     */
    public function queryBuildpackNativetechstackversion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryBuildpackNativetechstackversionEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * e.g: ce4456_jdk7_tengine, enhanced_ce4456_jdk7_tengine16
     * Summary: ?????????????????????????????????????????????.
     *
     * @param QueryBuildpackNativetechstackversionRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryBuildpackNativetechstackversionResponse
     */
    public function queryBuildpackNativetechstackversionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryBuildpackNativetechstackversionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.buildpack.nativetechstackversion.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????????????????
     * e.g: ????????? ce44610
     * Summary: ?????????????????????????????????????????????????????????.
     *
     * @param UpdateContainerserviceNativebpversionRequest $request
     *
     * @return UpdateContainerserviceNativebpversionResponse
     */
    public function updateContainerserviceNativebpversion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerserviceNativebpversionEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????????????????
     * e.g: ????????? ce44610
     * Summary: ?????????????????????????????????????????????????????????.
     *
     * @param UpdateContainerserviceNativebpversionRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateContainerserviceNativebpversionResponse
     */
    public function updateContainerserviceNativebpversionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerserviceNativebpversionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.nativebpversion.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????Dockerfile?????????????????????
     * Summary: ???????????????????????????Dockerfile.
     *
     * @param LoadContainerserviceDockerfileRequest $request
     *
     * @return LoadContainerserviceDockerfileResponse
     */
    public function loadContainerserviceDockerfile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->loadContainerserviceDockerfileEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????Dockerfile?????????????????????
     * Summary: ???????????????????????????Dockerfile.
     *
     * @param LoadContainerserviceDockerfileRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return LoadContainerserviceDockerfileResponse
     */
    public function loadContainerserviceDockerfileEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return LoadContainerserviceDockerfileResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.dockerfile.load', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param CreateBuildpackNativetechstackversionRequest $request
     *
     * @return CreateBuildpackNativetechstackversionResponse
     */
    public function createBuildpackNativetechstackversion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBuildpackNativetechstackversionEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param CreateBuildpackNativetechstackversionRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return CreateBuildpackNativetechstackversionResponse
     */
    public function createBuildpackNativetechstackversionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateBuildpackNativetechstackversionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.buildpack.nativetechstackversion.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: get zonelist of each workspace in a workspace group
     * Summary: getZoneListOfWSG.
     *
     * @param ListMulticlusterZoneRequest $request
     *
     * @return ListMulticlusterZoneResponse
     */
    public function listMulticlusterZone($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMulticlusterZoneEx($request, $headers, $runtime);
    }

    /**
     * Description: get zonelist of each workspace in a workspace group
     * Summary: getZoneListOfWSG.
     *
     * @param ListMulticlusterZoneRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListMulticlusterZoneResponse
     */
    public function listMulticlusterZoneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListMulticlusterZoneResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.multicluster.zone.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????/??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * Summary: ??????/???????????????????????????.
     *
     * @param ExecOpsplanAppopstaskRequest $request
     *
     * @return ExecOpsplanAppopstaskResponse
     */
    public function execOpsplanAppopstask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execOpsplanAppopstaskEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????/??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * Summary: ??????/???????????????????????????.
     *
     * @param ExecOpsplanAppopstaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExecOpsplanAppopstaskResponse
     */
    public function execOpsplanAppopstaskEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExecOpsplanAppopstaskResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.appopstask.exec', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * Summary: ?????????????????????.
     *
     * @param QueryOpsplanProgressRequest $request
     *
     * @return QueryOpsplanProgressResponse
     */
    public function queryOpsplanProgress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOpsplanProgressEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     * Summary: ?????????????????????.
     *
     * @param QueryOpsplanProgressRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryOpsplanProgressResponse
     */
    public function queryOpsplanProgressEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryOpsplanProgressResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.progress.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????(??????)??????????????????
     * Summary: ??????(??????)??????????????????.
     *
     * @param QueryOpsplanAppprogressRequest $request
     *
     * @return QueryOpsplanAppprogressResponse
     */
    public function queryOpsplanAppprogress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOpsplanAppprogressEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????(??????)??????????????????
     * Summary: ??????(??????)??????????????????.
     *
     * @param QueryOpsplanAppprogressRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryOpsplanAppprogressResponse
     */
    public function queryOpsplanAppprogressEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryOpsplanAppprogressResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.appprogress.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????pod??????
     * Summary: ????????????pod??????.
     *
     * @param ListContainerservicePodRequest $request
     *
     * @return ListContainerservicePodResponse
     */
    public function listContainerservicePod($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContainerservicePodEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????pod??????
     * Summary: ????????????pod??????.
     *
     * @param ListContainerservicePodRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListContainerservicePodResponse
     */
    public function listContainerservicePodEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListContainerservicePodResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.pod.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: To list kubeevents
     * Summary: To list kubeevents.
     *
     * @param ListContainerserviceKubeeventsRequest $request
     *
     * @return ListContainerserviceKubeeventsResponse
     */
    public function listContainerserviceKubeevents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContainerserviceKubeeventsEx($request, $headers, $runtime);
    }

    /**
     * Description: To list kubeevents
     * Summary: To list kubeevents.
     *
     * @param ListContainerserviceKubeeventsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListContainerserviceKubeeventsResponse
     */
    public function listContainerserviceKubeeventsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListContainerserviceKubeeventsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.kubeevents.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????Pod????????????
     * Summary: ??????Pod????????????.
     *
     * @param ListPodEventsRequest $request
     *
     * @return ListPodEventsResponse
     */
    public function listPodEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPodEventsEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????Pod????????????
     * Summary: ??????Pod????????????.
     *
     * @param ListPodEventsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPodEventsResponse
     */
    public function listPodEventsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListPodEventsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.pod.events.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????Pod????????????
     * Summary: ??????Pod????????????.
     *
     * @param ListPodContainersRequest $request
     *
     * @return ListPodContainersResponse
     */
    public function listPodContainers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPodContainersEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????Pod????????????
     * Summary: ??????Pod????????????.
     *
     * @param ListPodContainersRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListPodContainersResponse
     */
    public function listPodContainersEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListPodContainersResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.pod.containers.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: query replica cell
     * Summary: query replica cell.
     *
     * @param QueryContainerserviceCellRequest $request
     *
     * @return QueryContainerserviceCellResponse
     */
    public function queryContainerserviceCell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryContainerserviceCellEx($request, $headers, $runtime);
    }

    /**
     * Description: query replica cell
     * Summary: query replica cell.
     *
     * @param QueryContainerserviceCellRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryContainerserviceCellResponse
     */
    public function queryContainerserviceCellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryContainerserviceCellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.cell.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param CreateCellgroupRequest $request
     *
     * @return CreateCellgroupResponse
     */
    public function createCellgroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCellgroupEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param CreateCellgroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCellgroupResponse
     */
    public function createCellgroupEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateCellgroupResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cellgroup.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????cellgroup??????
     * Summary: ??????cellgroup??????.
     *
     * @param ListCellgroupRequest $request
     *
     * @return ListCellgroupResponse
     */
    public function listCellgroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCellgroupEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????cellgroup??????
     * Summary: ??????cellgroup??????.
     *
     * @param ListCellgroupRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListCellgroupResponse
     */
    public function listCellgroupEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListCellgroupResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cellgroup.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param UpdateCellgroupDisasterinfoRequest $request
     *
     * @return UpdateCellgroupDisasterinfoResponse
     */
    public function updateCellgroupDisasterinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCellgroupDisasterinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param UpdateCellgroupDisasterinfoRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateCellgroupDisasterinfoResponse
     */
    public function updateCellgroupDisasterinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateCellgroupDisasterinfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cellgroup.disasterinfo.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteCellgroupRequest $request
     *
     * @return DeleteCellgroupResponse
     */
    public function deleteCellgroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCellgroupEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteCellgroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCellgroupResponse
     */
    public function deleteCellgroupEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCellgroupResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cellgroup.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param ListCellRequest $request
     *
     * @return ListCellResponse
     */
    public function listCell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCellEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param ListCellRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListCellResponse
     */
    public function listCellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListCellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cell.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ??????????????????.
     *
     * @param CreateCellRequest $request
     *
     * @return CreateCellResponse
     */
    public function createCell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCellEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ??????????????????.
     *
     * @param CreateCellRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateCellResponse
     */
    public function createCellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateCellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cell.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteCellRequest $request
     *
     * @return DeleteCellResponse
     */
    public function deleteCell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCellEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteCellRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteCellResponse
     */
    public function deleteCellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cell.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????pod
     * Summary: ??????pod.
     *
     * @param DeletePodRequest $request
     *
     * @return DeletePodResponse
     */
    public function deletePod($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePodEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????pod
     * Summary: ??????pod.
     *
     * @param DeletePodRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeletePodResponse
     */
    public function deletePodEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeletePodResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.pod.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param GetWorkspacegroupTopologyRequest $request
     *
     * @return GetWorkspacegroupTopologyResponse
     */
    public function getWorkspacegroupTopology($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspacegroupTopologyEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param GetWorkspacegroupTopologyRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetWorkspacegroupTopologyResponse
     */
    public function getWorkspacegroupTopologyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetWorkspacegroupTopologyResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.workspacegroup.topology.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????? cell ??????
     * Summary: ?????? cell ??????.
     *
     * @param UpdateFlowCellweightRequest $request
     *
     * @return UpdateFlowCellweightResponse
     */
    public function updateFlowCellweight($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowCellweightEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????? cell ??????
     * Summary: ?????? cell ??????.
     *
     * @param UpdateFlowCellweightRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateFlowCellweightResponse
     */
    public function updateFlowCellweightEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFlowCellweightResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.cellweight.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: uid ????????????
     * Summary: uid ????????????.
     *
     * @param UpdateFlowUidrangeRequest $request
     *
     * @return UpdateFlowUidrangeResponse
     */
    public function updateFlowUidrange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowUidrangeEx($request, $headers, $runtime);
    }

    /**
     * Description: uid ????????????
     * Summary: uid ????????????.
     *
     * @param UpdateFlowUidrangeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateFlowUidrangeResponse
     */
    public function updateFlowUidrangeEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFlowUidrangeResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.uidrange.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????? UID ?????????????????????
     * Summary: ?????? UID ?????????????????????.
     *
     * @param EnableFlowElasticuidRequest $request
     *
     * @return EnableFlowElasticuidResponse
     */
    public function enableFlowElasticuid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableFlowElasticuidEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????? UID ?????????????????????
     * Summary: ?????? UID ?????????????????????.
     *
     * @param EnableFlowElasticuidRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return EnableFlowElasticuidResponse
     */
    public function enableFlowElasticuidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return EnableFlowElasticuidResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticuid.enable', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????? UID ??????
     * Summary: ?????? UID ??????.
     *
     * @param DisableFlowElasticuidRequest $request
     *
     * @return DisableFlowElasticuidResponse
     */
    public function disableFlowElasticuid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableFlowElasticuidEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????? UID ??????
     * Summary: ?????? UID ??????.
     *
     * @param DisableFlowElasticuidRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DisableFlowElasticuidResponse
     */
    public function disableFlowElasticuidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DisableFlowElasticuidResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticuid.disable', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param ExportFlowRuleRequest $request
     *
     * @return ExportFlowRuleResponse
     */
    public function exportFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportFlowRuleEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param ExportFlowRuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ExportFlowRuleResponse
     */
    public function exportFlowRuleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExportFlowRuleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.rule.export', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param PushFlowRuleRequest $request
     *
     * @return PushFlowRuleResponse
     */
    public function pushFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushFlowRuleEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param PushFlowRuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PushFlowRuleResponse
     */
    public function pushFlowRuleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PushFlowRuleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.rule.push', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param AddFlowElasticruleRequest $request
     *
     * @return AddFlowElasticruleResponse
     */
    public function addFlowElasticrule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFlowElasticruleEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param AddFlowElasticruleRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return AddFlowElasticruleResponse
     */
    public function addFlowElasticruleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddFlowElasticruleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticrule.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateFlowElasticruleRequest $request
     *
     * @return UpdateFlowElasticruleResponse
     */
    public function updateFlowElasticrule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowElasticruleEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateFlowElasticruleRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateFlowElasticruleResponse
     */
    public function updateFlowElasticruleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFlowElasticruleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticrule.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteFlowElasticruleRequest $request
     *
     * @return DeleteFlowElasticruleResponse
     */
    public function deleteFlowElasticrule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowElasticruleEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteFlowElasticruleRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteFlowElasticruleResponse
     */
    public function deleteFlowElasticruleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFlowElasticruleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticrule.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param AddFlowElasticsubruleRequest $request
     *
     * @return AddFlowElasticsubruleResponse
     */
    public function addFlowElasticsubrule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFlowElasticsubruleEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param AddFlowElasticsubruleRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AddFlowElasticsubruleResponse
     */
    public function addFlowElasticsubruleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddFlowElasticsubruleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticsubrule.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param DeleteFlowElasticsubruleRequest $request
     *
     * @return DeleteFlowElasticsubruleResponse
     */
    public function deleteFlowElasticsubrule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowElasticsubruleEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param DeleteFlowElasticsubruleRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteFlowElasticsubruleResponse
     */
    public function deleteFlowElasticsubruleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFlowElasticsubruleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticsubrule.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????
     *
     * @param UpdateFlowElasticrulestatusRequest $request
     *
     * @return UpdateFlowElasticrulestatusResponse
     */
    public function updateFlowElasticrulestatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowElasticrulestatusEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????
     *
     * @param UpdateFlowElasticrulestatusRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateFlowElasticrulestatusResponse
     */
    public function updateFlowElasticrulestatusEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFlowElasticrulestatusResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticrulestatus.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param BatchdeleteFlowElasticruleRequest $request
     *
     * @return BatchdeleteFlowElasticruleResponse
     */
    public function batchdeleteFlowElasticrule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchdeleteFlowElasticruleEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param BatchdeleteFlowElasticruleRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchdeleteFlowElasticruleResponse
     */
    public function batchdeleteFlowElasticruleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return BatchdeleteFlowElasticruleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticrule.batchdelete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param CreateFlowElasticsceneRequest $request
     *
     * @return CreateFlowElasticsceneResponse
     */
    public function createFlowElasticscene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowElasticsceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param CreateFlowElasticsceneRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFlowElasticsceneResponse
     */
    public function createFlowElasticsceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFlowElasticsceneResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticscene.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateFlowElasticsceneRequest $request
     *
     * @return UpdateFlowElasticsceneResponse
     */
    public function updateFlowElasticscene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowElasticsceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateFlowElasticsceneRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFlowElasticsceneResponse
     */
    public function updateFlowElasticsceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFlowElasticsceneResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticscene.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteFlowElasticsceneRequest $request
     *
     * @return DeleteFlowElasticsceneResponse
     */
    public function deleteFlowElasticscene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowElasticsceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteFlowElasticsceneRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteFlowElasticsceneResponse
     */
    public function deleteFlowElasticsceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFlowElasticsceneResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticscene.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param SetFlowElasticvalueRequest $request
     *
     * @return SetFlowElasticvalueResponse
     */
    public function setFlowElasticvalue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setFlowElasticvalueEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param SetFlowElasticvalueRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SetFlowElasticvalueResponse
     */
    public function setFlowElasticvalueEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SetFlowElasticvalueResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticvalue.set', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param DisableFlowElasticvalueRequest $request
     *
     * @return DisableFlowElasticvalueResponse
     */
    public function disableFlowElasticvalue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableFlowElasticvalueEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param DisableFlowElasticvalueRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableFlowElasticvalueResponse
     */
    public function disableFlowElasticvalueEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DisableFlowElasticvalueResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticvalue.disable', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param CreateFlowSiteRequest $request
     *
     * @return CreateFlowSiteResponse
     */
    public function createFlowSite($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowSiteEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param CreateFlowSiteRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFlowSiteResponse
     */
    public function createFlowSiteEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFlowSiteResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.site.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateFlowSiteRequest $request
     *
     * @return UpdateFlowSiteResponse
     */
    public function updateFlowSite($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowSiteEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateFlowSiteRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFlowSiteResponse
     */
    public function updateFlowSiteEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFlowSiteResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.site.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param DeleteFlowSiteRequest $request
     *
     * @return DeleteFlowSiteResponse
     */
    public function deleteFlowSite($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowSiteEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param DeleteFlowSiteRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFlowSiteResponse
     */
    public function deleteFlowSiteEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFlowSiteResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.site.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????pods?????????????????????
     * Summary: ?????????????????????.
     *
     * @param CreateOpsplanRestartRequest $request
     *
     * @return CreateOpsplanRestartResponse
     */
    public function createOpsplanRestart($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOpsplanRestartEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????pods?????????????????????
     * Summary: ?????????????????????.
     *
     * @param CreateOpsplanRestartRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOpsplanRestartResponse
     */
    public function createOpsplanRestartEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateOpsplanRestartResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.restart.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????revision????????????
     * Summary: ??????????????????revision????????????.
     *
     * @param UpdateContainerserviceCommentRequest $request
     *
     * @return UpdateContainerserviceCommentResponse
     */
    public function updateContainerserviceComment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerserviceCommentEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????revision????????????
     * Summary: ??????????????????revision????????????.
     *
     * @param UpdateContainerserviceCommentRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateContainerserviceCommentResponse
     */
    public function updateContainerserviceCommentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerserviceCommentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.comment.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param RollbackContainerserviceDeploymentRequest $request
     *
     * @return RollbackContainerserviceDeploymentResponse
     */
    public function rollbackContainerserviceDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackContainerserviceDeploymentEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param RollbackContainerserviceDeploymentRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return RollbackContainerserviceDeploymentResponse
     */
    public function rollbackContainerserviceDeploymentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RollbackContainerserviceDeploymentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.deployment.rollback', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????? uid ??????
     * Summary: ?????? uid ??????.
     *
     * @param QueryFlowUidinfoRequest $request
     *
     * @return QueryFlowUidinfoResponse
     */
    public function queryFlowUidinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowUidinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????? uid ??????
     * Summary: ?????? uid ??????.
     *
     * @param QueryFlowUidinfoRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryFlowUidinfoResponse
     */
    public function queryFlowUidinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowUidinfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.uidinfo.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param QueryFlowSiteRequest $request
     *
     * @return QueryFlowSiteResponse
     */
    public function queryFlowSite($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowSiteEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param QueryFlowSiteRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return QueryFlowSiteResponse
     */
    public function queryFlowSiteEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowSiteResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.site.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param GetCellRequest $request
     *
     * @return GetCellResponse
     */
    public function getCell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCellEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param GetCellRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCellResponse
     */
    public function getCellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetCellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cell.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????
     *
     * @param GetCellgroupRequest $request
     *
     * @return GetCellgroupResponse
     */
    public function getCellgroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCellgroupEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????
     *
     * @param GetCellgroupRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetCellgroupResponse
     */
    public function getCellgroupEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetCellgroupResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cellgroup.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????
     *
     * @param UpdateCellRequest $request
     *
     * @return UpdateCellResponse
     */
    public function updateCell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCellEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????
     *
     * @param UpdateCellRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateCellResponse
     */
    public function updateCellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateCellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cell.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????Pod/??????????????????
     * Summary: ??????Pod/??????????????????.
     *
     * @param ListEventsRequest $request
     *
     * @return ListEventsResponse
     */
    public function listEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEventsEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????Pod/??????????????????
     * Summary: ??????Pod/??????????????????.
     *
     * @param ListEventsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListEventsResponse
     */
    public function listEventsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListEventsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.events.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param ListRegionRequest $request
     *
     * @return ListRegionResponse
     */
    public function listRegion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param ListRegionRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListRegionResponse
     */
    public function listRegionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListRegionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.region.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param ListZoneRequest $request
     *
     * @return ListZoneResponse
     */
    public function listZone($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listZoneEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param ListZoneRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListZoneResponse
     */
    public function listZoneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListZoneResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.zone.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????pod???container ??????
     * Summary: ??????pod??????.
     *
     * @param QueryPodLogRequest $request
     *
     * @return QueryPodLogResponse
     */
    public function queryPodLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPodLogEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????pod???container ??????
     * Summary: ??????pod??????.
     *
     * @param QueryPodLogRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return QueryPodLogResponse
     */
    public function queryPodLogEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryPodLogResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.pod.log.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????spanner??????
     * Summary: ??????spanner??????.
     *
     * @param CreateSpannerClusterRequest $request
     *
     * @return CreateSpannerClusterResponse
     */
    public function createSpannerCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSpannerClusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????spanner??????
     * Summary: ??????spanner??????.
     *
     * @param CreateSpannerClusterRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSpannerClusterResponse
     */
    public function createSpannerClusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateSpannerClusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.spanner.cluster.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param GetSpannerClusterRequest $request
     *
     * @return GetSpannerClusterResponse
     */
    public function getSpannerCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSpannerClusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param GetSpannerClusterRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSpannerClusterResponse
     */
    public function getSpannerClusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetSpannerClusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.spanner.cluster.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????spanner??????
     * Summary: ??????spanner??????.
     *
     * @param ScaleSpannerClusterRequest $request
     *
     * @return ScaleSpannerClusterResponse
     */
    public function scaleSpannerCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleSpannerClusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????spanner??????
     * Summary: ??????spanner??????.
     *
     * @param ScaleSpannerClusterRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ScaleSpannerClusterResponse
     */
    public function scaleSpannerClusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ScaleSpannerClusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.spanner.cluster.scale', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QuerySpannerClusterRequest $request
     *
     * @return QuerySpannerClusterResponse
     */
    public function querySpannerCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySpannerClusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QuerySpannerClusterRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySpannerClusterResponse
     */
    public function querySpannerClusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QuerySpannerClusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.spanner.cluster.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????spanner????????????
     * Summary: ??????spanner????????????
     *
     * @param UpdateSpannerClusterstatusRequest $request
     *
     * @return UpdateSpannerClusterstatusResponse
     */
    public function updateSpannerClusterstatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSpannerClusterstatusEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????spanner????????????
     * Summary: ??????spanner????????????
     *
     * @param UpdateSpannerClusterstatusRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateSpannerClusterstatusResponse
     */
    public function updateSpannerClusterstatusEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSpannerClusterstatusResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.spanner.clusterstatus.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????
     *
     * @param UpdateSpannerUnitstatusRequest $request
     *
     * @return UpdateSpannerUnitstatusResponse
     */
    public function updateSpannerUnitstatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSpannerUnitstatusEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????
     *
     * @param UpdateSpannerUnitstatusRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSpannerUnitstatusResponse
     */
    public function updateSpannerUnitstatusEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSpannerUnitstatusResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.spanner.unitstatus.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????|??????
     * Summary: ????????????????????????|??????.
     *
     * @param CancelOpsplanServiceRequest $request
     *
     * @return CancelOpsplanServiceResponse
     */
    public function cancelOpsplanService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelOpsplanServiceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????|??????
     * Summary: ????????????????????????|??????.
     *
     * @param CancelOpsplanServiceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CancelOpsplanServiceResponse
     */
    public function cancelOpsplanServiceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CancelOpsplanServiceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.service.cancel', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????url
     * Summary: ??????url??????.
     *
     * @param ListSystemUrlRequest $request
     *
     * @return ListSystemUrlResponse
     */
    public function listSystemUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSystemUrlEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????url
     * Summary: ??????url??????.
     *
     * @param ListSystemUrlRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSystemUrlResponse
     */
    public function listSystemUrlEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListSystemUrlResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.system.url.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ??????.
     *
     * @param QueryFlowRecordRequest $request
     *
     * @return QueryFlowRecordResponse
     */
    public function queryFlowRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowRecordEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ??????.
     *
     * @param QueryFlowRecordRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryFlowRecordResponse
     */
    public function queryFlowRecordEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowRecordResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.record.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param SaveFlowEnvrelRequest $request
     *
     * @return SaveFlowEnvrelResponse
     */
    public function saveFlowEnvrel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveFlowEnvrelEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param SaveFlowEnvrelRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SaveFlowEnvrelResponse
     */
    public function saveFlowEnvrelEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SaveFlowEnvrelResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.envrel.save', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteFlowEnvrelRequest $request
     *
     * @return DeleteFlowEnvrelResponse
     */
    public function deleteFlowEnvrel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowEnvrelEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeleteFlowEnvrelRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFlowEnvrelResponse
     */
    public function deleteFlowEnvrelEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFlowEnvrelResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.envrel.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param QueryFlowEnvrelRequest $request
     *
     * @return QueryFlowEnvrelResponse
     */
    public function queryFlowEnvrel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowEnvrelEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param QueryFlowEnvrelRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryFlowEnvrelResponse
     */
    public function queryFlowEnvrelEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowEnvrelResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.envrel.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param CreateFlowSitecellRequest $request
     *
     * @return CreateFlowSitecellResponse
     */
    public function createFlowSitecell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowSitecellEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param CreateFlowSitecellRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowSitecellResponse
     */
    public function createFlowSitecellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFlowSitecellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.sitecell.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param DeleteFlowSitecellRequest $request
     *
     * @return DeleteFlowSitecellResponse
     */
    public function deleteFlowSitecell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowSitecellEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param DeleteFlowSitecellRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFlowSitecellResponse
     */
    public function deleteFlowSitecellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFlowSitecellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.sitecell.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryFlowSitecellRequest $request
     *
     * @return QueryFlowSitecellResponse
     */
    public function queryFlowSitecell($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowSitecellEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryFlowSitecellRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryFlowSitecellResponse
     */
    public function queryFlowSitecellEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowSitecellResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.sitecell.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param GetOpsplanServiceRequest $request
     *
     * @return GetOpsplanServiceResponse
     */
    public function getOpsplanService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOpsplanServiceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param GetOpsplanServiceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetOpsplanServiceResponse
     */
    public function getOpsplanServiceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetOpsplanServiceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.service.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param QueryFlowRuleRequest $request
     *
     * @return QueryFlowRuleResponse
     */
    public function queryFlowRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowRuleEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param QueryFlowRuleRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return QueryFlowRuleResponse
     */
    public function queryFlowRuleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowRuleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.rule.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????FedDeployment
     * Summary: ??????FedDeployment.
     *
     * @param CreateFederationDeploymentRequest $request
     *
     * @return CreateFederationDeploymentResponse
     */
    public function createFederationDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFederationDeploymentEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????FedDeployment
     * Summary: ??????FedDeployment.
     *
     * @param CreateFederationDeploymentRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateFederationDeploymentResponse
     */
    public function createFederationDeploymentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFederationDeploymentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.deployment.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????[??????????????????????????????????????????LHC?????????]
     * Summary: ???????????????????????????
     *
     * @param QueryLoadbalancerRequest $request
     *
     * @return QueryLoadbalancerResponse
     */
    public function queryLoadbalancer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryLoadbalancerEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????[??????????????????????????????????????????LHC?????????]
     * Summary: ???????????????????????????
     *
     * @param QueryLoadbalancerRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryLoadbalancerResponse
     */
    public function queryLoadbalancerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryLoadbalancerResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.loadbalancer.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????? Service ?????????
     * Summary: ?????????????????? Service ?????????
     *
     * @param ListContainerserviceServiceRequest $request
     *
     * @return ListContainerserviceServiceResponse
     */
    public function listContainerserviceService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContainerserviceServiceEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????? Service ?????????
     * Summary: ?????????????????? Service ?????????
     *
     * @param ListContainerserviceServiceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListContainerserviceServiceResponse
     */
    public function listContainerserviceServiceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListContainerserviceServiceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.service.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????sidecar???????????????
     * Summary: ??????sidecar???????????????.
     *
     * @param ListSidecarRequest $request
     *
     * @return ListSidecarResponse
     */
    public function listSidecar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSidecarEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????sidecar???????????????
     * Summary: ??????sidecar???????????????.
     *
     * @param ListSidecarRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSidecarResponse
     */
    public function listSidecarEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListSidecarResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecar.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: list template
     * Summary: list template.
     *
     * @param ListSidecarTemplateRequest $request
     *
     * @return ListSidecarTemplateResponse
     */
    public function listSidecarTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSidecarTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: list template
     * Summary: list template.
     *
     * @param ListSidecarTemplateRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListSidecarTemplateResponse
     */
    public function listSidecarTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListSidecarTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecar.template.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????sidecar????????????
     * Summary: ????????????.
     *
     * @param GetSidecarTemplateRequest $request
     *
     * @return GetSidecarTemplateResponse
     */
    public function getSidecarTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSidecarTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????sidecar????????????
     * Summary: ????????????.
     *
     * @param GetSidecarTemplateRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetSidecarTemplateResponse
     */
    public function getSidecarTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetSidecarTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecar.template.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????FedDeployment??????
     * Summary: ??????FedDeployment??????.
     *
     * @param GetFederationDeploymentRequest $request
     *
     * @return GetFederationDeploymentResponse
     */
    public function getFederationDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFederationDeploymentEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????FedDeployment??????
     * Summary: ??????FedDeployment??????.
     *
     * @param GetFederationDeploymentRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetFederationDeploymentResponse
     */
    public function getFederationDeploymentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetFederationDeploymentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.deployment.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????FederatedDeployment????????????
     * Summary: ??????FedDeploy??????.
     *
     * @param ListFederationDeploymentRequest $request
     *
     * @return ListFederationDeploymentResponse
     */
    public function listFederationDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFederationDeploymentEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????FederatedDeployment????????????
     * Summary: ??????FedDeploy??????.
     *
     * @param ListFederationDeploymentRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListFederationDeploymentResponse
     */
    public function listFederationDeploymentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListFederationDeploymentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.deployment.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????FedDeployment
     * Summary: ??????FedDeployment.
     *
     * @param DeleteFederationDeploymentRequest $request
     *
     * @return DeleteFederationDeploymentResponse
     */
    public function deleteFederationDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFederationDeploymentEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????FedDeployment
     * Summary: ??????FedDeployment.
     *
     * @param DeleteFederationDeploymentRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteFederationDeploymentResponse
     */
    public function deleteFederationDeploymentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFederationDeploymentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.federation.deployment.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????uid???????????????uid??????
     * Summary: ????????????uid???????????????uid??????.
     *
     * @param SetFlowDefaultuidRequest $request
     *
     * @return SetFlowDefaultuidResponse
     */
    public function setFlowDefaultuid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setFlowDefaultuidEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????uid???????????????uid??????
     * Summary: ????????????uid???????????????uid??????.
     *
     * @param SetFlowDefaultuidRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SetFlowDefaultuidResponse
     */
    public function setFlowDefaultuidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SetFlowDefaultuidResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.defaultuid.set', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????|??????
     * Summary: ??????????????????????????????|??????.
     *
     * @param StartOpsplanServiceRequest $request
     *
     * @return StartOpsplanServiceResponse
     */
    public function startOpsplanService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startOpsplanServiceEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????|??????
     * Summary: ??????????????????????????????|??????.
     *
     * @param StartOpsplanServiceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartOpsplanServiceResponse
     */
    public function startOpsplanServiceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return StartOpsplanServiceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.service.start', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????
     *
     * @param ConfirmOpsplanServicerollbackRequest $request
     *
     * @return ConfirmOpsplanServicerollbackResponse
     */
    public function confirmOpsplanServicerollback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmOpsplanServicerollbackEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????
     *
     * @param ConfirmOpsplanServicerollbackRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ConfirmOpsplanServicerollbackResponse
     */
    public function confirmOpsplanServicerollbackEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ConfirmOpsplanServicerollbackResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.servicerollback.confirm', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param RetryOpsplanServiceRequest $request
     *
     * @return RetryOpsplanServiceResponse
     */
    public function retryOpsplanService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryOpsplanServiceEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param RetryOpsplanServiceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RetryOpsplanServiceResponse
     */
    public function retryOpsplanServiceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RetryOpsplanServiceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.service.retry', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryFlowElasticsceneRequest $request
     *
     * @return QueryFlowElasticsceneResponse
     */
    public function queryFlowElasticscene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowElasticsceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryFlowElasticsceneRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryFlowElasticsceneResponse
     */
    public function queryFlowElasticsceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowElasticsceneResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticscene.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryFlowElasticruleRequest $request
     *
     * @return QueryFlowElasticruleResponse
     */
    public function queryFlowElasticrule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowElasticruleEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryFlowElasticruleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryFlowElasticruleResponse
     */
    public function queryFlowElasticruleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowElasticruleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticrule.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param QueryFlowElasticsubruleRequest $request
     *
     * @return QueryFlowElasticsubruleResponse
     */
    public function queryFlowElasticsubrule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowElasticsubruleEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param QueryFlowElasticsubruleRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryFlowElasticsubruleResponse
     */
    public function queryFlowElasticsubruleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowElasticsubruleResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticsubrule.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????
     *
     * @param QueryFlowElasticvalueRequest $request
     *
     * @return QueryFlowElasticvalueResponse
     */
    public function queryFlowElasticvalue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFlowElasticvalueEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????
     *
     * @param QueryFlowElasticvalueRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryFlowElasticvalueResponse
     */
    public function queryFlowElasticvalueEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFlowElasticvalueResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.flow.elasticvalue.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param ListSystemSwitchRequest $request
     *
     * @return ListSystemSwitchResponse
     */
    public function listSystemSwitch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSystemSwitchEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param ListSystemSwitchRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListSystemSwitchResponse
     */
    public function listSystemSwitchEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListSystemSwitchResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.system.switch.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????Dockerfile
     * Summary: ????????????????????????Dockerfile.
     *
     * @param LoadBuildpackDockerfileRequest $request
     *
     * @return LoadBuildpackDockerfileResponse
     */
    public function loadBuildpackDockerfile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->loadBuildpackDockerfileEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????Dockerfile
     * Summary: ????????????????????????Dockerfile.
     *
     * @param LoadBuildpackDockerfileRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return LoadBuildpackDockerfileResponse
     */
    public function loadBuildpackDockerfileEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return LoadBuildpackDockerfileResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.buildpack.dockerfile.load', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????pod?????????????????????
     * Summary: ??????pod???????????????.
     *
     * @param CreateOpsplanPodofflineRequest $request
     *
     * @return CreateOpsplanPodofflineResponse
     */
    public function createOpsplanPodoffline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOpsplanPodofflineEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????pod?????????????????????
     * Summary: ??????pod???????????????.
     *
     * @param CreateOpsplanPodofflineRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateOpsplanPodofflineResponse
     */
    public function createOpsplanPodofflineEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateOpsplanPodofflineResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.podoffline.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????OB???????????????????????????uid?????????
     * Summary: ??????OB????????????.
     *
     * @param CreateDbflowObtenantRequest $request
     *
     * @return CreateDbflowObtenantResponse
     */
    public function createDbflowObtenant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDbflowObtenantEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????OB???????????????????????????uid?????????
     * Summary: ??????OB????????????.
     *
     * @param CreateDbflowObtenantRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDbflowObtenantResponse
     */
    public function createDbflowObtenantEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDbflowObtenantResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.dbflow.obtenant.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????ob????????????
     * Summary: ????????????ob????????????.
     *
     * @param QueryDbflowObtenantRequest $request
     *
     * @return QueryDbflowObtenantResponse
     */
    public function queryDbflowObtenant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDbflowObtenantEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????ob????????????
     * Summary: ????????????ob????????????.
     *
     * @param QueryDbflowObtenantRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryDbflowObtenantResponse
     */
    public function queryDbflowObtenantEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryDbflowObtenantResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.dbflow.obtenant.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????OB?????????????????????uid??????
     * Summary: ??????OB????????????.
     *
     * @param UpdateDbflowObtenantRequest $request
     *
     * @return UpdateDbflowObtenantResponse
     */
    public function updateDbflowObtenant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDbflowObtenantEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????OB?????????????????????uid??????
     * Summary: ??????OB????????????.
     *
     * @param UpdateDbflowObtenantRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDbflowObtenantResponse
     */
    public function updateDbflowObtenantEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDbflowObtenantResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.dbflow.obtenant.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????PaaS????????????OB????????????????????????OB????????????
     * Summary: ??????PaaS????????????OB????????????.
     *
     * @param DeleteDbflowObtenantRequest $request
     *
     * @return DeleteDbflowObtenantResponse
     */
    public function deleteDbflowObtenant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDbflowObtenantEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????PaaS????????????OB????????????????????????OB????????????
     * Summary: ??????PaaS????????????OB????????????.
     *
     * @param DeleteDbflowObtenantRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDbflowObtenantResponse
     */
    public function deleteDbflowObtenantEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDbflowObtenantResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.dbflow.obtenant.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????Dockerfile???????????????
     * Summary: ?????????????????????????????????.
     *
     * @param UpdateBuildpackNativetechstackversionRequest $request
     *
     * @return UpdateBuildpackNativetechstackversionResponse
     */
    public function updateBuildpackNativetechstackversion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBuildpackNativetechstackversionEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????Dockerfile???????????????
     * Summary: ?????????????????????????????????.
     *
     * @param UpdateBuildpackNativetechstackversionRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateBuildpackNativetechstackversionResponse
     */
    public function updateBuildpackNativetechstackversionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateBuildpackNativetechstackversionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.buildpack.nativetechstackversion.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????region????????????
     * Summary: ???????????????region??????.
     *
     * @param ListWorkspacegroupRegionsRequest $request
     *
     * @return ListWorkspacegroupRegionsResponse
     */
    public function listWorkspacegroupRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacegroupRegionsEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????region????????????
     * Summary: ???????????????region??????.
     *
     * @param ListWorkspacegroupRegionsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListWorkspacegroupRegionsResponse
     */
    public function listWorkspacegroupRegionsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListWorkspacegroupRegionsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.workspacegroup.regions.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ??????????????????.
     *
     * @param ListClusterInfoRequest $request
     *
     * @return ListClusterInfoResponse
     */
    public function listClusterInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterInfoEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ??????????????????.
     *
     * @param ListClusterInfoRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListClusterInfoResponse
     */
    public function listClusterInfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListClusterInfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.info.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param ListClusterOverviewRequest $request
     *
     * @return ListClusterOverviewResponse
     */
    public function listClusterOverview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterOverviewEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param ListClusterOverviewRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListClusterOverviewResponse
     */
    public function listClusterOverviewEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListClusterOverviewResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cluster.overview.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????ALB???????????????
     * Summary: ??????ALB???????????????
     *
     * @param ListCertificatesRequest $request
     *
     * @return ListCertificatesResponse
     */
    public function listCertificates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCertificatesEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????ALB???????????????
     * Summary: ??????ALB???????????????
     *
     * @param ListCertificatesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListCertificatesResponse
     */
    public function listCertificatesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListCertificatesResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.certificates.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????lb iaas id???
     * Summary: ???????????????????????????lb iaas id???
     *
     * @param ListLoadbalancerRequest $request
     *
     * @return ListLoadbalancerResponse
     */
    public function listLoadbalancer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLoadbalancerEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????lb iaas id???
     * Summary: ???????????????????????????lb iaas id???
     *
     * @param ListLoadbalancerRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListLoadbalancerResponse
     */
    public function listLoadbalancerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListLoadbalancerResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.loadbalancer.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????cloudconfig????????????
     * Summary: ??????cloudconfig????????????.
     *
     * @param GetCloudconfigRequest $request
     *
     * @return GetCloudconfigResponse
     */
    public function getCloudconfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCloudconfigEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????cloudconfig????????????
     * Summary: ??????cloudconfig????????????.
     *
     * @param GetCloudconfigRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetCloudconfigResponse
     */
    public function getCloudconfigEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetCloudconfigResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cloudconfig.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????cloudconfig
     * Summary: ??????cloudconfig.
     *
     * @param UpdateCloudconfigRequest $request
     *
     * @return UpdateCloudconfigResponse
     */
    public function updateCloudconfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCloudconfigEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????cloudconfig
     * Summary: ??????cloudconfig.
     *
     * @param UpdateCloudconfigRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCloudconfigResponse
     */
    public function updateCloudconfigEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateCloudconfigResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cloudconfig.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param ListCloudconfigHistoryRequest $request
     *
     * @return ListCloudconfigHistoryResponse
     */
    public function listCloudconfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCloudconfigHistoryEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param ListCloudconfigHistoryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListCloudconfigHistoryResponse
     */
    public function listCloudconfigHistoryEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListCloudconfigHistoryResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.cloudconfig.history.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: sidecar???????????????????????????|?????????
     * Summary: sidecar?????????????????????|?????????.
     *
     * @param CreateSidecarOperationRequest $request
     *
     * @return CreateSidecarOperationResponse
     */
    public function createSidecarOperation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSidecarOperationEx($request, $headers, $runtime);
    }

    /**
     * Description: sidecar???????????????????????????|?????????
     * Summary: sidecar?????????????????????|?????????.
     *
     * @param CreateSidecarOperationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSidecarOperationResponse
     */
    public function createSidecarOperationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateSidecarOperationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecar.operation.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????operationId??????sidecar??????
     * Summary: ??????sidecar??????.
     *
     * @param RetrySidecarOperationRequest $request
     *
     * @return RetrySidecarOperationResponse
     */
    public function retrySidecarOperation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retrySidecarOperationEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????operationId??????sidecar??????
     * Summary: ??????sidecar??????.
     *
     * @param RetrySidecarOperationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RetrySidecarOperationResponse
     */
    public function retrySidecarOperationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RetrySidecarOperationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecar.operation.retry', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????sidecar??????
     * Summary: ??????sidecar??????.
     *
     * @param CancelSidecarOperationRequest $request
     *
     * @return CancelSidecarOperationResponse
     */
    public function cancelSidecarOperation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelSidecarOperationEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????sidecar??????
     * Summary: ??????sidecar??????.
     *
     * @param CancelSidecarOperationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CancelSidecarOperationResponse
     */
    public function cancelSidecarOperationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CancelSidecarOperationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecar.operation.cancel', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: create or update a service
     * Summary: patch a service.
     *
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceEx($request, $headers, $runtime);
    }

    /**
     * Description: create or update a service
     * Summary: patch a service.
     *
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateServiceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.service.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????LHC???????????????
     * Summary: ????????????LHC???????????????.
     *
     * @param CreateGpaasReleaseRequest $request
     *
     * @return CreateGpaasReleaseResponse
     */
    public function createGpaasRelease($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGpaasReleaseEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????LHC???????????????
     * Summary: ????????????LHC???????????????.
     *
     * @param CreateGpaasReleaseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateGpaasReleaseResponse
     */
    public function createGpaasReleaseEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateGpaasReleaseResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.gpaas.release.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????sidecar????????????
     * Summary: ??????sidecar????????????.
     *
     * @param QuerySidecarOperationRequest $request
     *
     * @return QuerySidecarOperationResponse
     */
    public function querySidecarOperation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySidecarOperationEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????sidecar????????????
     * Summary: ??????sidecar????????????.
     *
     * @param QuerySidecarOperationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySidecarOperationResponse
     */
    public function querySidecarOperationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QuerySidecarOperationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecar.operation.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????Kubernetes????????????
     * Summary: ??????Kubernetes????????????.
     *
     * @param ListKubernetesResourcesRequest $request
     *
     * @return ListKubernetesResourcesResponse
     */
    public function listKubernetesResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKubernetesResourcesEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????Kubernetes????????????
     * Summary: ??????Kubernetes????????????.
     *
     * @param ListKubernetesResourcesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListKubernetesResourcesResponse
     */
    public function listKubernetesResourcesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListKubernetesResourcesResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.kubernetes.resources.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ldc???????????????????????????k8s?????????????????????pod???stage???rpv2????????????????????????
     * Summary: ldc???????????????k8s????????????.
     *
     * @param QueryReleasepipelinestageEventRequest $request
     *
     * @return QueryReleasepipelinestageEventResponse
     */
    public function queryReleasepipelinestageEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryReleasepipelinestageEventEx($request, $headers, $runtime);
    }

    /**
     * Description: ldc???????????????????????????k8s?????????????????????pod???stage???rpv2????????????????????????
     * Summary: ldc???????????????k8s????????????.
     *
     * @param QueryReleasepipelinestageEventRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryReleasepipelinestageEventResponse
     */
    public function queryReleasepipelinestageEventEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryReleasepipelinestageEventResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.releasepipelinestage.event.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????projectname
     * Summary: ??????projectname.
     *
     * @param GetSlsProjectnameRequest $request
     *
     * @return GetSlsProjectnameResponse
     */
    public function getSlsProjectname($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSlsProjectnameEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????projectname
     * Summary: ??????projectname.
     *
     * @param GetSlsProjectnameRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSlsProjectnameResponse
     */
    public function getSlsProjectnameEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetSlsProjectnameResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sls.projectname.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ldc???????????????????????????k8s?????????????????????pod???stage???rpv2????????????????????????
     * Summary: ldc???????????????k8s????????????.
     *
     * @param QueryReleasepipelineEventRequest $request
     *
     * @return QueryReleasepipelineEventResponse
     */
    public function queryReleasepipelineEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryReleasepipelineEventEx($request, $headers, $runtime);
    }

    /**
     * Description: ldc???????????????????????????k8s?????????????????????pod???stage???rpv2????????????????????????
     * Summary: ldc???????????????k8s????????????.
     *
     * @param QueryReleasepipelineEventRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryReleasepipelineEventResponse
     */
    public function queryReleasepipelineEventEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryReleasepipelineEventResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.releasepipeline.event.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ldc???????????????????????????k8s?????????????????????pod???stage???rpv2????????????????????????
     * Summary: ldc???????????????k8s????????????.
     *
     * @param QueryPodEventRequest $request
     *
     * @return QueryPodEventResponse
     */
    public function queryPodEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPodEventEx($request, $headers, $runtime);
    }

    /**
     * Description: ldc???????????????????????????k8s?????????????????????pod???stage???rpv2????????????????????????
     * Summary: ldc???????????????k8s????????????.
     *
     * @param QueryPodEventRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return QueryPodEventResponse
     */
    public function queryPodEventEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryPodEventResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.pod.event.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ldc???????????????????????????log???????????????stage???rpv2????????????????????????
     * Summary: ldc???????????????logs??????.
     *
     * @param QueryServiceProcesslogRequest $request
     *
     * @return QueryServiceProcesslogResponse
     */
    public function queryServiceProcesslog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryServiceProcesslogEx($request, $headers, $runtime);
    }

    /**
     * Description: ldc???????????????????????????log???????????????stage???rpv2????????????????????????
     * Summary: ldc???????????????logs??????.
     *
     * @param QueryServiceProcesslogRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryServiceProcesslogResponse
     */
    public function queryServiceProcesslogEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryServiceProcesslogResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.service.processlog.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????-???????????????????????????????????????
     * Summary: ????????????-???????????????????????????????????????
     *
     * @param QueryAppServiceRequest $request
     *
     * @return QueryAppServiceResponse
     */
    public function queryAppService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAppServiceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????-???????????????????????????????????????
     * Summary: ????????????-???????????????????????????????????????
     *
     * @param QueryAppServiceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryAppServiceResponse
     */
    public function queryAppServiceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAppServiceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.app.service.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????-?????????????????????????????????????????????
     * Summary: ????????????-?????????????????????????????????????????????.
     *
     * @param QueryAppPlanRequest $request
     *
     * @return QueryAppPlanResponse
     */
    public function queryAppPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAppPlanEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????-?????????????????????????????????????????????
     * Summary: ????????????-?????????????????????????????????????????????.
     *
     * @param QueryAppPlanRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryAppPlanResponse
     */
    public function queryAppPlanEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAppPlanResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.app.plan.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????????????????????????????????????????
     * Summary: ????????????????????????.
     *
     * @param CreateUnifiedaccessinstanceRequest $request
     *
     * @return CreateUnifiedaccessinstanceResponse
     */
    public function createUnifiedaccessinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUnifiedaccessinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????????????????????????????????????????
     * Summary: ????????????????????????.
     *
     * @param CreateUnifiedaccessinstanceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateUnifiedaccessinstanceResponse
     */
    public function createUnifiedaccessinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateUnifiedaccessinstanceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unifiedaccessinstance.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param QueryUnifiedaccessinstanceRequest $request
     *
     * @return QueryUnifiedaccessinstanceResponse
     */
    public function queryUnifiedaccessinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryUnifiedaccessinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param QueryUnifiedaccessinstanceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryUnifiedaccessinstanceResponse
     */
    public function queryUnifiedaccessinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryUnifiedaccessinstanceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unifiedaccessinstance.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param GetUnifiedaccessinstanceRequest $request
     *
     * @return GetUnifiedaccessinstanceResponse
     */
    public function getUnifiedaccessinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUnifiedaccessinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param GetUnifiedaccessinstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUnifiedaccessinstanceResponse
     */
    public function getUnifiedaccessinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetUnifiedaccessinstanceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unifiedaccessinstance.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param DeleteUnifiedaccessinstanceRequest $request
     *
     * @return DeleteUnifiedaccessinstanceResponse
     */
    public function deleteUnifiedaccessinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUnifiedaccessinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param DeleteUnifiedaccessinstanceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteUnifiedaccessinstanceResponse
     */
    public function deleteUnifiedaccessinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteUnifiedaccessinstanceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unifiedaccessinstance.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param UpdateUnifiedaccessinstanceRequest $request
     *
     * @return UpdateUnifiedaccessinstanceResponse
     */
    public function updateUnifiedaccessinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUnifiedaccessinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param UpdateUnifiedaccessinstanceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateUnifiedaccessinstanceResponse
     */
    public function updateUnifiedaccessinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateUnifiedaccessinstanceResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unifiedaccessinstance.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ldc ?????????????????? openAPI
     * Summary: ldc ?????????????????? openAPI.
     *
     * @param ExecUnireleasespiRequest $request
     *
     * @return ExecUnireleasespiResponse
     */
    public function execUnireleasespi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execUnireleasespiEx($request, $headers, $runtime);
    }

    /**
     * Description: ldc ?????????????????? openAPI
     * Summary: ldc ?????????????????? openAPI.
     *
     * @param ExecUnireleasespiRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ExecUnireleasespiResponse
     */
    public function execUnireleasespiEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExecUnireleasespiResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unireleasespi.exec', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????? fed spanner ??????
     * Summary: ?????? fed spanner ??????.
     *
     * @param CreateFedspannerclusterRequest $request
     *
     * @return CreateFedspannerclusterResponse
     */
    public function createFedspannercluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFedspannerclusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????? fed spanner ??????
     * Summary: ?????? fed spanner ??????.
     *
     * @param CreateFedspannerclusterRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateFedspannerclusterResponse
     */
    public function createFedspannerclusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFedspannerclusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedspannercluster.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????fed spanner ??????????????????
     * Summary: ?????? fed spanner ??????.
     *
     * @param QueryFedspannerclusterRequest $request
     *
     * @return QueryFedspannerclusterResponse
     */
    public function queryFedspannercluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFedspannerclusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????fed spanner ??????????????????
     * Summary: ?????? fed spanner ??????.
     *
     * @param QueryFedspannerclusterRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryFedspannerclusterResponse
     */
    public function queryFedspannerclusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryFedspannerclusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedspannercluster.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????fed?????? name ??????????????????????????????
     * Summary: ????????????fed spanner ????????????.
     *
     * @param GetFedspannerclusterRequest $request
     *
     * @return GetFedspannerclusterResponse
     */
    public function getFedspannercluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFedspannerclusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????fed?????? name ??????????????????????????????
     * Summary: ????????????fed spanner ????????????.
     *
     * @param GetFedspannerclusterRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetFedspannerclusterResponse
     */
    public function getFedspannerclusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetFedspannerclusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedspannercluster.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????? spanner ??????
     * Summary: ?????????????????? spanner ??????.
     *
     * @param ListFedspannerclusterRequest $request
     *
     * @return ListFedspannerclusterResponse
     */
    public function listFedspannercluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFedspannerclusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????? spanner ??????
     * Summary: ?????????????????? spanner ??????.
     *
     * @param ListFedspannerclusterRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListFedspannerclusterResponse
     */
    public function listFedspannerclusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListFedspannerclusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedspannercluster.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????fed spanner??????
     * Summary: ?????? ??????spanner??????.
     *
     * @param DeleteFedspannerclusterRequest $request
     *
     * @return DeleteFedspannerclusterResponse
     */
    public function deleteFedspannercluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFedspannerclusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????fed spanner??????
     * Summary: ?????? ??????spanner??????.
     *
     * @param DeleteFedspannerclusterRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteFedspannerclusterResponse
     */
    public function deleteFedspannerclusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFedspannerclusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedspannercluster.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ???????????? fed spanner ??????.
     *
     * @param BatchdeleteFedspannerclusterRequest $request
     *
     * @return BatchdeleteFedspannerclusterResponse
     */
    public function batchdeleteFedspannercluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchdeleteFedspannerclusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ???????????? fed spanner ??????.
     *
     * @param BatchdeleteFedspannerclusterRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchdeleteFedspannerclusterResponse
     */
    public function batchdeleteFedspannerclusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return BatchdeleteFedspannerclusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedspannercluster.batchdelete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????? fed spanner ??????
     * Summary: ?????? fed spanner ??????.
     *
     * @param UpdateFedspannerclusterRequest $request
     *
     * @return UpdateFedspannerclusterResponse
     */
    public function updateFedspannercluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFedspannerclusterEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????? fed spanner ??????
     * Summary: ?????? fed spanner ??????.
     *
     * @param UpdateFedspannerclusterRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateFedspannerclusterResponse
     */
    public function updateFedspannerclusterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFedspannerclusterResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedspannercluster.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param CreateReleaseplanRequest $request
     *
     * @return CreateReleaseplanResponse
     */
    public function createReleaseplan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createReleaseplanEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param CreateReleaseplanRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateReleaseplanResponse
     */
    public function createReleaseplanEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateReleaseplanResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.releaseplan.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????fed spanner cluster name ????????????????????????
     * Summary: ?????? spanner ?????? ??????
     *
     * @param UpdateFedspannerclusterStatusRequest $request
     *
     * @return UpdateFedspannerclusterStatusResponse
     */
    public function updateFedspannerclusterStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFedspannerclusterStatusEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????fed spanner cluster name ????????????????????????
     * Summary: ?????? spanner ?????? ??????
     *
     * @param UpdateFedspannerclusterStatusRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateFedspannerclusterStatusResponse
     */
    public function updateFedspannerclusterStatusEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFedspannerclusterStatusResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedspannercluster.status.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????antvip??????
     * Summary: ??????antvip??????.
     *
     * @param AddAntvipDomainRequest $request
     *
     * @return AddAntvipDomainResponse
     */
    public function addAntvipDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addAntvipDomainEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????antvip??????
     * Summary: ??????antvip??????.
     *
     * @param AddAntvipDomainRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AddAntvipDomainResponse
     */
    public function addAntvipDomainEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddAntvipDomainResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.antvip.domain.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????antvip??????
     * Summary: ??????antvip??????.
     *
     * @param DeleteAntvipDomainRequest $request
     *
     * @return DeleteAntvipDomainResponse
     */
    public function deleteAntvipDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAntvipDomainEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????antvip??????
     * Summary: ??????antvip??????.
     *
     * @param DeleteAntvipDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAntvipDomainResponse
     */
    public function deleteAntvipDomainEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAntvipDomainResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.antvip.domain.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????? Ingress ?????????
     * Summary: ?????????????????? Ingress ?????????
     *
     * @param ListContainerserviceIngressRequest $request
     *
     * @return ListContainerserviceIngressResponse
     */
    public function listContainerserviceIngress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContainerserviceIngressEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????? Ingress ?????????
     * Summary: ?????????????????? Ingress ?????????
     *
     * @param ListContainerserviceIngressRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListContainerserviceIngressResponse
     */
    public function listContainerserviceIngressEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListContainerserviceIngressResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.ingress.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param CreateContainerserviceOperationRequest $request
     *
     * @return CreateContainerserviceOperationResponse
     */
    public function createContainerserviceOperation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createContainerserviceOperationEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param CreateContainerserviceOperationRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateContainerserviceOperationResponse
     */
    public function createContainerserviceOperationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateContainerserviceOperationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.operation.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????k8s??????
     * Summary: ???????????????k8s event.
     *
     * @param ListMulticlusterEventsRequest $request
     *
     * @return ListMulticlusterEventsResponse
     */
    public function listMulticlusterEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMulticlusterEventsEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????k8s??????
     * Summary: ???????????????k8s event.
     *
     * @param ListMulticlusterEventsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListMulticlusterEventsResponse
     */
    public function listMulticlusterEventsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListMulticlusterEventsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.multicluster.events.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param ApplyContainerserviceDeploymentRequest $request
     *
     * @return ApplyContainerserviceDeploymentResponse
     */
    public function applyContainerserviceDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyContainerserviceDeploymentEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param ApplyContainerserviceDeploymentRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ApplyContainerserviceDeploymentResponse
     */
    public function applyContainerserviceDeploymentEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ApplyContainerserviceDeploymentResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.deployment.apply', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????Ingress??????????????????
     * Summary: ??????????????????Ingress??????????????????.
     *
     * @param UpdateIngressTrafficweightRequest $request
     *
     * @return UpdateIngressTrafficweightResponse
     */
    public function updateIngressTrafficweight($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIngressTrafficweightEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????Ingress??????????????????
     * Summary: ??????????????????Ingress??????????????????.
     *
     * @param UpdateIngressTrafficweightRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateIngressTrafficweightResponse
     */
    public function updateIngressTrafficweightEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateIngressTrafficweightResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.ingress.trafficweight.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param GetOpsplanBluedetailRequest $request
     *
     * @return GetOpsplanBluedetailResponse
     */
    public function getOpsplanBluedetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOpsplanBluedetailEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param GetOpsplanBluedetailRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetOpsplanBluedetailResponse
     */
    public function getOpsplanBluedetailEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetOpsplanBluedetailResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.bluedetail.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????Ingress?????????????????????
     * Summary: ??????????????????Ingress????????????.
     *
     * @param ListIngressTrafficweightRequest $request
     *
     * @return ListIngressTrafficweightResponse
     */
    public function listIngressTrafficweight($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIngressTrafficweightEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????Ingress?????????????????????
     * Summary: ??????????????????Ingress????????????.
     *
     * @param ListIngressTrafficweightRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListIngressTrafficweightResponse
     */
    public function listIngressTrafficweightEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListIngressTrafficweightResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.ingress.trafficweight.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????OAM??????????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param CreateOamserviceApplicationconfigurationRequest $request
     *
     * @return CreateOamserviceApplicationconfigurationResponse
     */
    public function createOamserviceApplicationconfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOamserviceApplicationconfigurationEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????OAM??????????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param CreateOamserviceApplicationconfigurationRequest $request
     * @param string[]                                        $headers
     * @param RuntimeOptions                                  $runtime
     *
     * @return CreateOamserviceApplicationconfigurationResponse
     */
    public function createOamserviceApplicationconfigurationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateOamserviceApplicationconfigurationResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.oamservice.applicationconfiguration.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param CreateFedloadbalancerRequest $request
     *
     * @return CreateFedloadbalancerResponse
     */
    public function createFedloadbalancer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFedloadbalancerEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param CreateFedloadbalancerRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateFedloadbalancerResponse
     */
    public function createFedloadbalancerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateFedloadbalancerResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedloadbalancer.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param UpdateFedloadbalancerRequest $request
     *
     * @return UpdateFedloadbalancerResponse
     */
    public function updateFedloadbalancer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFedloadbalancerEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param UpdateFedloadbalancerRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateFedloadbalancerResponse
     */
    public function updateFedloadbalancerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFedloadbalancerResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedloadbalancer.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: list????????????????????????
     * Summary: list????????????????????????.
     *
     * @param ListFedloadbalancerRequest $request
     *
     * @return ListFedloadbalancerResponse
     */
    public function listFedloadbalancer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFedloadbalancerEx($request, $headers, $runtime);
    }

    /**
     * Description: list????????????????????????
     * Summary: list????????????????????????.
     *
     * @param ListFedloadbalancerRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListFedloadbalancerResponse
     */
    public function listFedloadbalancerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListFedloadbalancerResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedloadbalancer.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param DeleteFedloadbalancerRequest $request
     *
     * @return DeleteFedloadbalancerResponse
     */
    public function deleteFedloadbalancer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFedloadbalancerEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param DeleteFedloadbalancerRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteFedloadbalancerResponse
     */
    public function deleteFedloadbalancerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFedloadbalancerResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedloadbalancer.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param GetFedloadbalancerRequest $request
     *
     * @return GetFedloadbalancerResponse
     */
    public function getFedloadbalancer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFedloadbalancerEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param GetFedloadbalancerRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetFedloadbalancerResponse
     */
    public function getFedloadbalancerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetFedloadbalancerResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.fedloadbalancer.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param ImportUnireleaseSolutionRequest $request
     *
     * @return ImportUnireleaseSolutionResponse
     */
    public function importUnireleaseSolution($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importUnireleaseSolutionEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param ImportUnireleaseSolutionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportUnireleaseSolutionResponse
     */
    public function importUnireleaseSolutionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportUnireleaseSolutionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unirelease.solution.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param ListUnireleaseSolutionsRequest $request
     *
     * @return ListUnireleaseSolutionsResponse
     */
    public function listUnireleaseSolutions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUnireleaseSolutionsEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param ListUnireleaseSolutionsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUnireleaseSolutionsResponse
     */
    public function listUnireleaseSolutionsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListUnireleaseSolutionsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unirelease.solutions.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param GetUnireleaseSolutionRequest $request
     *
     * @return GetUnireleaseSolutionResponse
     */
    public function getUnireleaseSolution($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUnireleaseSolutionEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param GetUnireleaseSolutionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetUnireleaseSolutionResponse
     */
    public function getUnireleaseSolutionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetUnireleaseSolutionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unirelease.solution.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????
     *
     * @param GetUnireleasePipelineRequest $request
     *
     * @return GetUnireleasePipelineResponse
     */
    public function getUnireleasePipeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUnireleasePipelineEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????
     *
     * @param GetUnireleasePipelineRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetUnireleasePipelineResponse
     */
    public function getUnireleasePipelineEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetUnireleasePipelineResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unirelease.pipeline.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param ExecUnireleasePipelinesRequest $request
     *
     * @return ExecUnireleasePipelinesResponse
     */
    public function execUnireleasePipelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execUnireleasePipelinesEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param ExecUnireleasePipelinesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ExecUnireleasePipelinesResponse
     */
    public function execUnireleasePipelinesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExecUnireleasePipelinesResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unirelease.pipelines.exec', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????????????????????????????.
     *
     * @param GetUnireleaseTenantsRequest $request
     *
     * @return GetUnireleaseTenantsResponse
     */
    public function getUnireleaseTenants($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUnireleaseTenantsEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????????????????????????????.
     *
     * @param GetUnireleaseTenantsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetUnireleaseTenantsResponse
     */
    public function getUnireleaseTenantsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetUnireleaseTenantsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unirelease.tenants.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param AddContainerserviceMiddlewareconfigRequest $request
     *
     * @return AddContainerserviceMiddlewareconfigResponse
     */
    public function addContainerserviceMiddlewareconfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addContainerserviceMiddlewareconfigEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param AddContainerserviceMiddlewareconfigRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return AddContainerserviceMiddlewareconfigResponse
     */
    public function addContainerserviceMiddlewareconfigEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddContainerserviceMiddlewareconfigResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.middlewareconfig.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????pods??????????????????????????????????????????
     * Summary: ??????????????????.
     *
     * @param ExportOpsplanStagesRequest $request
     *
     * @return ExportOpsplanStagesResponse
     */
    public function exportOpsplanStages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportOpsplanStagesEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????pods??????????????????????????????????????????
     * Summary: ??????????????????.
     *
     * @param ExportOpsplanStagesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ExportOpsplanStagesResponse
     */
    public function exportOpsplanStagesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExportOpsplanStagesResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.opsplan.stages.export', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: huanyu??????????????????tenant, appName, wsgLabel??????wsgName, namespace, containerServiceName, ??????containerServiceRevision
     * Summary: ??????????????????????????????.
     *
     * @param DetailAppMetainfoRequest $request
     *
     * @return DetailAppMetainfoResponse
     */
    public function detailAppMetainfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detailAppMetainfoEx($request, $headers, $runtime);
    }

    /**
     * Description: huanyu??????????????????tenant, appName, wsgLabel??????wsgName, namespace, containerServiceName, ??????containerServiceRevision
     * Summary: ??????????????????????????????.
     *
     * @param DetailAppMetainfoRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DetailAppMetainfoResponse
     */
    public function detailAppMetainfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DetailAppMetainfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.app.metainfo.detail', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????sidecar?????????????????????????????????feature???
     * Summary: ??????sidecar??????.
     *
     * @param UpdateSidecaropsRequest $request
     *
     * @return UpdateSidecaropsResponse
     */
    public function updateSidecarops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSidecaropsEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????sidecar?????????????????????????????????feature???
     * Summary: ??????sidecar??????.
     *
     * @param UpdateSidecaropsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSidecaropsResponse
     */
    public function updateSidecaropsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSidecaropsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????????????????????????????
     * Summary: ????????????????????????????????????????????????????????????.
     *
     * @param CountContainerserviceCellreplicasRequest $request
     *
     * @return CountContainerserviceCellreplicasResponse
     */
    public function countContainerserviceCellreplicas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->countContainerserviceCellreplicasEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????????????????????????????
     * Summary: ????????????????????????????????????????????????????????????.
     *
     * @param CountContainerserviceCellreplicasRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CountContainerserviceCellreplicasResponse
     */
    public function countContainerserviceCellreplicasEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CountContainerserviceCellreplicasResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.cellreplicas.count', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????sidecar???template???????????????20??????
     * Summary: ??????sidecar???template??????.
     *
     * @param ListSidecaropsTemplateRequest $request
     *
     * @return ListSidecaropsTemplateResponse
     */
    public function listSidecaropsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSidecaropsTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????sidecar???template???????????????20??????
     * Summary: ??????sidecar???template??????.
     *
     * @param ListSidecaropsTemplateRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListSidecaropsTemplateResponse
     */
    public function listSidecaropsTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListSidecaropsTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.template.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????sidecar???????????????????????????????????????????????????????????????pod?????????
     * Summary: ??????sidecar????????????????????????.
     *
     * @param UpdateSidecaropsConsistencyRequest $request
     *
     * @return UpdateSidecaropsConsistencyResponse
     */
    public function updateSidecaropsConsistency($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSidecaropsConsistencyEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????sidecar???????????????????????????????????????????????????????????????pod?????????
     * Summary: ??????sidecar????????????????????????.
     *
     * @param UpdateSidecaropsConsistencyRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateSidecaropsConsistencyResponse
     */
    public function updateSidecaropsConsistencyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSidecaropsConsistencyResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.consistency.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????rd?????????????????????rd??????weight 0
     * Summary: ????????????.
     *
     * @param FinishSidecaropsRequest $request
     *
     * @return FinishSidecaropsResponse
     */
    public function finishSidecarops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishSidecaropsEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????rd?????????????????????rd??????weight 0
     * Summary: ????????????.
     *
     * @param FinishSidecaropsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return FinishSidecaropsResponse
     */
    public function finishSidecaropsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return FinishSidecaropsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.finish', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????rd??????????????????
     * Summary: ??????????????????
     *
     * @param QuerySidecaropsStateRequest $request
     *
     * @return QuerySidecaropsStateResponse
     */
    public function querySidecaropsState($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySidecaropsStateEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????rd??????????????????
     * Summary: ??????????????????
     *
     * @param QuerySidecaropsStateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySidecaropsStateResponse
     */
    public function querySidecaropsStateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QuerySidecaropsStateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.state.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????sidecar???????????????????????????????????????????????????tempalte??????????????????????????????
     * Summary: ??????sidecar????????????
     *
     * @param AddSidecaropsTemplateRequest $request
     *
     * @return AddSidecaropsTemplateResponse
     */
    public function addSidecaropsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSidecaropsTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????sidecar???????????????????????????????????????????????????tempalte??????????????????????????????
     * Summary: ??????sidecar????????????
     *
     * @param AddSidecaropsTemplateRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AddSidecaropsTemplateResponse
     */
    public function addSidecaropsTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddSidecaropsTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.template.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????sidecar???????????????????????????????????????????????????feature??????????????????
     * Summary: ??????????????????sidecar?????????????????????.
     *
     * @param QuerySidecaropsReleaseinfoRequest $request
     *
     * @return QuerySidecaropsReleaseinfoResponse
     */
    public function querySidecaropsReleaseinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySidecaropsReleaseinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????sidecar???????????????????????????????????????????????????feature??????????????????
     * Summary: ??????????????????sidecar?????????????????????.
     *
     * @param QuerySidecaropsReleaseinfoRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySidecaropsReleaseinfoResponse
     */
    public function querySidecaropsReleaseinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QuerySidecaropsReleaseinfoResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.releaseinfo.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????sidecar??????????????????????????????
     * Summary: ???????????????sidecar.
     *
     * @param InitSidecaropsRequest $request
     *
     * @return InitSidecaropsResponse
     */
    public function initSidecarops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initSidecaropsEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????sidecar??????????????????????????????
     * Summary: ???????????????sidecar.
     *
     * @param InitSidecaropsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return InitSidecaropsResponse
     */
    public function initSidecaropsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return InitSidecaropsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.init', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????sidecar????????????????????????sidecar??????????????????????????????????????????pod????????????
     * Summary: ??????sidecar??????.
     *
     * @param RebootSidecaropsRequest $request
     *
     * @return RebootSidecaropsResponse
     */
    public function rebootSidecarops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebootSidecaropsEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????sidecar????????????????????????sidecar??????????????????????????????????????????pod????????????
     * Summary: ??????sidecar??????.
     *
     * @param RebootSidecaropsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RebootSidecaropsResponse
     */
    public function rebootSidecaropsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RebootSidecaropsResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.reboot', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????????????????lks1.25.0????????????
     * Summary: ??????????????????.
     *
     * @param DeleteContainerserviceRevisionRequest $request
     *
     * @return DeleteContainerserviceRevisionResponse
     */
    public function deleteContainerserviceRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteContainerserviceRevisionEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????????????????lks1.25.0????????????
     * Summary: ??????????????????.
     *
     * @param DeleteContainerserviceRevisionRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteContainerserviceRevisionResponse
     */
    public function deleteContainerserviceRevisionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteContainerserviceRevisionResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.revision.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????? customhook ????????? api???lks1.25.0????????????
     * Summary: ???????????? hook ????????? api.
     *
     * @param ExecContainerserviceApihookRequest $request
     *
     * @return ExecContainerserviceApihookResponse
     */
    public function execContainerserviceApihook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execContainerserviceApihookEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????? customhook ????????? api???lks1.25.0????????????
     * Summary: ???????????? hook ????????? api.
     *
     * @param ExecContainerserviceApihookRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ExecContainerserviceApihookResponse
     */
    public function execContainerserviceApihookEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExecContainerserviceApihookResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.apihook.exec', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????sidecar?????????????????????sidecar??????????????????????????????sidecar???????????????
     * Summary: ?????????????????????????????????.
     *
     * @param QuerySidecaropsAllservicesRequest $request
     *
     * @return QuerySidecaropsAllservicesResponse
     */
    public function querySidecaropsAllservices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySidecaropsAllservicesEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????sidecar?????????????????????sidecar??????????????????????????????sidecar???????????????
     * Summary: ?????????????????????????????????.
     *
     * @param QuerySidecaropsAllservicesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySidecaropsAllservicesResponse
     */
    public function querySidecaropsAllservicesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QuerySidecaropsAllservicesResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.allservices.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????????????????
     * Summary: ??????sidecar????????????
     *
     * @param UpdateSidecaropsTemplateRequest $request
     *
     * @return UpdateSidecaropsTemplateResponse
     */
    public function updateSidecaropsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSidecaropsTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????????????????
     * Summary: ??????sidecar????????????
     *
     * @param UpdateSidecaropsTemplateRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateSidecaropsTemplateResponse
     */
    public function updateSidecaropsTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSidecaropsTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.sidecarops.template.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param CreateDeploymentTemplateRequest $request
     *
     * @return CreateDeploymentTemplateResponse
     */
    public function createDeploymentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeploymentTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param CreateDeploymentTemplateRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDeploymentTemplateResponse
     */
    public function createDeploymentTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDeploymentTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.template.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryUnireleaseSolutionfilesRequest $request
     *
     * @return QueryUnireleaseSolutionfilesResponse
     */
    public function queryUnireleaseSolutionfiles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryUnireleaseSolutionfilesEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryUnireleaseSolutionfilesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryUnireleaseSolutionfilesResponse
     */
    public function queryUnireleaseSolutionfilesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryUnireleaseSolutionfilesResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unirelease.solutionfiles.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param GetUnireleaseSolutionfileRequest $request
     *
     * @return GetUnireleaseSolutionfileResponse
     */
    public function getUnireleaseSolutionfile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUnireleaseSolutionfileEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param GetUnireleaseSolutionfileRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetUnireleaseSolutionfileResponse
     */
    public function getUnireleaseSolutionfileEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetUnireleaseSolutionfileResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.unirelease.solutionfile.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param UpdateDeploymentTemplateRequest $request
     *
     * @return UpdateDeploymentTemplateResponse
     */
    public function updateDeploymentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeploymentTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param UpdateDeploymentTemplateRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateDeploymentTemplateResponse
     */
    public function updateDeploymentTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDeploymentTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.template.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param ListDeploymentTemplateRequest $request
     *
     * @return ListDeploymentTemplateResponse
     */
    public function listDeploymentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeploymentTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param ListDeploymentTemplateRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListDeploymentTemplateResponse
     */
    public function listDeploymentTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListDeploymentTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.template.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param DeleteDeploymentTemplateRequest $request
     *
     * @return DeleteDeploymentTemplateResponse
     */
    public function deleteDeploymentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeploymentTemplateEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????
     *
     * @param DeleteDeploymentTemplateRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDeploymentTemplateResponse
     */
    public function deleteDeploymentTemplateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeploymentTemplateResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.deployment.template.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param ListEmergencyPlansRequest $request
     *
     * @return ListEmergencyPlansResponse
     */
    public function listEmergencyPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEmergencyPlansEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param ListEmergencyPlansRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListEmergencyPlansResponse
     */
    public function listEmergencyPlansEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListEmergencyPlansResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.emergency.plans.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param UpdateContainerserviceGrayreleaseconfigRequest $request
     *
     * @return UpdateContainerserviceGrayreleaseconfigResponse
     */
    public function updateContainerserviceGrayreleaseconfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContainerserviceGrayreleaseconfigEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param UpdateContainerserviceGrayreleaseconfigRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return UpdateContainerserviceGrayreleaseconfigResponse
     */
    public function updateContainerserviceGrayreleaseconfigEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateContainerserviceGrayreleaseconfigResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerservice.grayreleaseconfig.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????????????????
     * Summary: ????????????????????????????????????????????????.
     *
     * @param QueryContainerserivceGrayreleaseconfigRequest $request
     *
     * @return QueryContainerserivceGrayreleaseconfigResponse
     */
    public function queryContainerserivceGrayreleaseconfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryContainerserivceGrayreleaseconfigEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????????????????
     * Summary: ????????????????????????????????????????????????.
     *
     * @param QueryContainerserivceGrayreleaseconfigRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return QueryContainerserivceGrayreleaseconfigResponse
     */
    public function queryContainerserivceGrayreleaseconfigEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryContainerserivceGrayreleaseconfigResponse::fromMap($this->doRequest('1.0', 'antcloud.ldc.containerserivce.grayreleaseconfig.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }
}
