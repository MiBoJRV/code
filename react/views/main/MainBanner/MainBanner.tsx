import React from 'react';
import { HelpIcon } from 'src/assets/icons';
import {
  PageTitle,
  Heading3,
  Link,
  EmphasizedText,
  IconButton,
  PageSection,
  HelpButton,
} from 'src/ui-kit';
import { MAIN_BANNER_IMGS_CONFIG } from './constants';

export const MainBanner: React.FC = (): JSX.Element => (
  <PageSection
    paddingTop="pt-0"
    paddingTopLg="lg:pt-0"
    paddingBottomLg="lg:pb-[46px]"
    className="relative"
  >
    <div className="lg:flex">
      <div className="max-w-full pt-7 lg:max-w-[36%] lg:pt-[84px]">
        <PageTitle
          title="Software Product Development Company"
          className="mb-2.5"
        />
        <Heading3 className="mb-[30px]">
          <EmphasizedText title="Modernize" /> your business with the
          <EmphasizedText title=" latest tech" /> to ensure steady
          <EmphasizedText title=" growth" />
        </Heading3>
        <Link
          title="Start a project"
          href="#"
          className="hidden lg:block mb-36"
        />
      </div>
      <div className="w-[100%] lg:w-[63%]">
        <div className="relative pb-[100%]">
          {MAIN_BANNER_IMGS_CONFIG.map(({ id, image, alt, className }) => (
            <img
              key={id}
              srcSet={image?.srcSet ?? ''}
              src={image?.src ?? ''}
              {...{ alt, className }}
            />
          ))}
        </div>
      </div>
      <Link title="Start a project" href="#" className="lg:hidden" />
      <div className="fixed bottom-[5%] left-8 z-[1] hidden lg:block">
        <HelpButton
          btnKind="lg"
          title="Help"
          icon={<HelpIcon />}
          iconPosition="left"
          className="hidden lg:flex "
        />
      </div>
      <div className="fixed bottom-[5%] right-8 lg:hidden z-[1]">
        <IconButton icon={<HelpIcon />} btnKind="xl" className="ml-auto" />
      </div>
    </div>
  </PageSection>
);
