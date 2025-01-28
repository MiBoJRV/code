import React from 'react';
import {
  PageSection,
  Heading2,
  EmphasizedText,
  Text1,
  Heading4,
  Text2,
  Link,
} from 'src/ui-kit';
import { AvangaIcon, AvangaSmallIcon } from 'src/assets/icons';
import { AVANGA_IMGS_CONFIG } from './constants';

export const AvangaSection: React.FC = (): JSX.Element => (
  <PageSection paddingBottomLg="lg:pb-[16px]">
    <Heading2 className="max-w-6xl mx-auto mb-5 text-center lg:mb-8">
      You need more than just programmers. You need
      <EmphasizedText title=" product experts" />
    </Heading2>
    <Text1
      fontSizeLg="text-x2"
      title="We have hands-on experience solving real business challenges by automating routine tasks and crafting software products used by entire organizations."
      className="max-w-screen-md mx-auto mb-14 text-center lg:mb-5"
    />
    <div className="lg:flex ">
      <div className="max-w-full text-center lg:max-w-[31%] lg:text-left lg:pt-20">
        <Heading4
          title="“Jira meets Slack”"
          fontSizeLg="lg:text-h3"
          className="mb-5 lg:mb-10"
        />
        <Text2
          title="a project management SaaS we've developed to solve our operational headaches."
          className="mb-10 lg:mb-16"
        />
        <AvangaIcon className="hidden w-60 h-16 mb-20 lg:block" />
        <Link title="View case study" href="#" className="hidden lg:block" />
      </div>
      <div className="w-[100%] lg:w-[69%]">
        <div className="relative pb-[70%] lg:pb-[80%]">
          <AvangaSmallIcon className="absolute -top-[5%] sm:top-[10%] lg:hidden" />
          {AVANGA_IMGS_CONFIG.map(({ id, image, alt, className }) => (
            <img
              key={id}
              srcSet={image?.srcSet ?? ''}
              src={image?.src ?? ''}
              {...{ alt, className }}
            />
          ))}
        </div>
      </div>
    </div>
    <Link title="View case study" href="#" className="mx-auto lg:hidden" />
  </PageSection>
);
