import React from 'react';
import { WHATWEDO_LINKS, FOOTER_BLOCKS_CONFIG } from './constants';
import { PageContainer, PageSection } from 'src/ui-kit';
import { AboutCompany, FooterLinkBlock, WhatWeDo } from 'src/components';

export const Footer: React.FC = (): JSX.Element => (
  <footer>
    <PageContainer>
      <PageSection paddingBottom="pb-0" paddingBottomLg="pb-0">
        <div className="flex justify-between flex-col gap-5 lg:flex-row">
          <AboutCompany className=" w-full lg:w-[23.6%]" />
          <div className="flex justify-start gap-5 w-full lg:w-[76.4%] ">
            <WhatWeDo footerLinks={WHATWEDO_LINKS} className="w-1/2" />
            <div className="w-1/2 flex justify-start flex-col gap-5 lg:justify-between  lg:flex-row">
              {FOOTER_BLOCKS_CONFIG.map(({ ...config }) => (
                <FooterLinkBlock key={config.id} {...config} />
              ))}
            </div>
          </div>
        </div>
        <div className="my-6 flex py-1">
          <small className="text-grey text-x4">
            2023 Copyright Wetelo. All rights reserved.
          </small>
        </div>
      </PageSection>
    </PageContainer>
  </footer>
);
